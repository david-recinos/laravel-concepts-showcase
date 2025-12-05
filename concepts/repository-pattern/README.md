# Repository Pattern

The Repository Pattern abstracts data access logic and keeps your code flexible.

## When to Use
- When models become bloated
- When switching data sources is possible
- When business logic must not depend on Eloquent

## Benefits
- Clean separation of concerns
- Easier testing
- Improved maintainability

## Example Workflow
Controller → Service → Repository → Model / Data Source
