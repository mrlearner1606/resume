#!/usr/bin/env python3
"""Render the resume HTML to an A4 PDF, the same as Ctrl+P > Save as PDF.

Usage: python html_to_pdf.py [input.html] [output.pdf]
"""
import os
import sys
from pathlib import Path

from playwright.sync_api import sync_playwright

src = Path(sys.argv[1] if len(sys.argv) > 1 else "index.html").resolve()
out = Path(sys.argv[2] if len(sys.argv) > 2 else "Krishna-Resume.pdf").resolve()

if not src.is_file():
    sys.exit(f"Input not found: {src}")

with sync_playwright() as p:
    browser = p.chromium.launch()
    page = browser.new_page()
    # Wait for Google Fonts (Playfair Display, Source Sans 3) so the PDF matches the web page
    page.goto(src.as_uri(), wait_until="networkidle", timeout=60_000)
    page.evaluate("document.fonts.ready")

    # Fail rather than overwrite the PDF with fallback fonts if Google Fonts did not load.
    loaded = set(
        page.evaluate(
            "[...document.fonts].filter(f => f.status === 'loaded')"
            ".map(f => f.family.replace(/[\"']/g, ''))"
        )
    )
    needed = {"Playfair Display", "Source Sans 3"}
    if not needed <= loaded and not os.environ.get("ALLOW_FALLBACK_FONTS"):
        sys.exit(f"Web fonts did not load (missing: {sorted(needed - loaded)}). Not writing a PDF.")

    page.emulate_media(media="print")
    page.pdf(
        path=str(out),
        format="A4",
        print_background=True,
        prefer_css_page_size=True,
    )
    browser.close()

size = out.stat().st_size
if size < 10_000 or out.read_bytes()[:4] != b"%PDF":
    sys.exit(f"PDF looks wrong ({size} bytes): {out}")
print(f"Wrote {out} ({size:,} bytes)")
