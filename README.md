 # PHP REST API Project

A complete REST API built with raw PHP and PDO, implementing full CRUD operations for a blog post management system.

## Project Structure

```
├── api/
│   ├── create.php        # POST - Create new posts
│   ├── read.php          # GET - Retrieve all posts
│   ├── read_single.php   # GET - Retrieve single post by ID
│   ├── update.php        # PUT - Update existing posts
│   └── delete.php        # DELETE - Remove posts
├── core/
│   ├── initialize.php    # Database initialization and autoloading
│   └── post.php         # Post model with database operations
└── includes/
    └── config.php       # Database configuration
```

## Technologies Used

- **PHP** - Server-side scripting language
- **MySQL** - Relational database management
- **PDO** - Database abstraction layer with prepared statements
- **XAMPP** - Local development environment
- **JSON** - Data exchange format

## API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET    | `/api/read.php` | Get all posts with category information |
| GET    | `/api/read_single.php?id={id}` | Get single post by ID |
| POST   | `/api/create.php` | Create new post |
| PUT    | `/api/update.php` | Update existing post |
| DELETE | `/api/delete.php` | Delete post by ID |

## Database Setup

1. Start XAMPP (Apache + MySQL)
2. Create database `phprest`
3. Create required tables:
   - `posts` (id, category_id, title, body, author, created_at)
   - `categories` (id, name, created_at)
4. Configure database credentials in `includes/config.php`

## Key Features

- **Complete CRUD Operations** - Create, Read, Update, Delete functionality
- **RESTful Architecture** - Proper HTTP methods and status codes
- **Security** - PDO prepared statements prevent SQL injection
- **Object-Oriented Design** - Clean separation of concerns with model classes
- **JSON API** - Structured JSON responses with proper headers
- **Database Relationships** - JOIN queries between posts and categories
- **Error Handling** - Graceful error responses and validation

## Technical Implementation

- **PDO with Prepared Statements** for secure database interactions
- **Object-oriented PHP** with dedicated model classes
- **Proper HTTP headers** for CORS and content type
- **Data validation** and sanitization
- **Modular architecture** for maintaiability and scalability

## Skills Demonstrated

- Raw PHP development without frameworks
- Database design and relationships
- REST API principles and implementation  
- Secure coding practices
- Object-oriented programming patterns
- JSON data handling and API design