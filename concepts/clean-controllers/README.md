# Clean Controllers

Controllers should only:
- Validate input
- Call services
- Return responses

## Why Controllers Get Messy
- Mixing business logic
- Doing database queries directly
- Handling multiple responsibilities

## Benefits of Clean Controllers
- Readable endpoints
- Testable business logic
- Fewer bugs
- Clear application flow

## How to Achieve Clean Controllers
- Use Form Requests for validation
- Use Services for business logic
- Use Resources for responses
