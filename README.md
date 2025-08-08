 # PHP REST API Learning Project

Learning PHP fundamentals and REST API development using raw PDO (PHP Data Objects).

## Project Structure

```
├── api/
│   └── read.php          # API endpoint for reading posts
├── core/
│   ├── initialize.php    # Database initialization
│   └── post.php         # Post model with database operations
└── includes/
    └── config.php       # Database configuration
```

## Technologies Used

- **PHP** - Server-side scripting
- **MySQL** - Database
- **PDO** - Database connection and queries
- **XAMPP** - Local development environment

## Database Setup

1. Start XAMPP (Apache + MySQL)
2. Create database `phprest`
3. Create `posts` and `categories` tables
4. Configure database connection in `includes/config.php`

## Features

- Database connection with PDO
- Prepared statements for security
- Object-oriented PHP approach
- RESTful API structure
- Join queries with relationships

## Learning Goals

- Understanding PHP fundamentals
- Database operations with PDO
- REST API concepts
- Preparing for Laravel framework transition

## Next Steps

- Add CRUD operations (Create, Update, Delete)
- Implement proper error handling
- Add JSON response formatting
- Transition to Laravel framework