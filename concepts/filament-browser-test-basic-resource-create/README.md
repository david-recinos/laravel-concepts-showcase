# Filament v4 Browser Test — Create Resource Example

This concept demonstrates how to write a modern Pest Browser test for Filament
v4 using the latest browser plugin API (`visit()` instead of `$browser`).

## What This Shows
- Logging into Filament's admin panel
- Navigating to a Resource "Create" page
- Filling form inputs
- Submitting a resource
- Asserting a success message

## Why It Matters
Filament v4 projects increasingly require browser-level tests to ensure
that:
- Resources load correctly
- Forms submit successfully
- User flows stay stable after UI or backend changes

This example is intentionally minimal but represents the exact pattern used
in real Filament test suites.
