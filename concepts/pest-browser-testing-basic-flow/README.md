# Pest Browser Testing — Basic Form Flow (Modern API)

This concept demonstrates a minimal browser test using the modern Pest Browser
Plugin API (v2+), which provides fluent global functions like `visit()`.

## What This Example Shows
- Visiting a page using `visit()`
- Filling inputs
- Pressing buttons
- Asserting visible text
- Full browser automation with a minimal footprint

## Why It Matters
This modern API replaces older Dusk-style `$browser->visit()` syntax and is now
the preferred way to write browser tests in Pest.

Browser tests are ideal for validating:
- Form submissions
- User flows
- End-to-end correctness
- Regression coverage
