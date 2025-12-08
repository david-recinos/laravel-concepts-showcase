# Validation with Form Requests (Laravel)

Form Requests allow you to extract validation and authorization logic out of your controllers and into a
dedicated class. This keeps controllers clean, improves testability, and creates a consistent structure
for handling incoming data.

### Why this pattern matters
- Centralizes validation rules
- Keeps controllers small and maintainable
- Supports authorization logic (authorize() method)
- Automatically returns validation errors in a clean format
- Makes the code easier to test and extend

### Example: StoreDonationRequest.php
This Form Request validates the amount, currency, and donor email before the controller handles the donation.

Key methods:
- `authorize()` → Determines if the user is allowed to perform the action.
- `rules()` → Defines the shape and constraints of the incoming request.


#### Diagram
flowchart TD
A[HTTP Request] --> B[Controller]
B -->|type-hints| C[FormRequest]
C --> D[authorize() + rules()]
D --> E[validated data]