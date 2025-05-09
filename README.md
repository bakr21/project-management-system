# Project Management System without Database

![System Preview](screenshots/preview.png)

A comprehensive project management system that operates without a traditional database, using JSON files for data storage and a file system for image management.

## Key Features

- Attractive and user-friendly Arabic RTL interface
- Easy project creation, editing, and deletion
- Visually appealing project display with images
- Automatic file management (images deleted when projects are removed)
- Responsive design that works on all devices
- Full support for Arabic language and RTL interface

## Technologies Used

- **PHP** for core functionality and file handling
- **Bootstrap 5 RTL** for UI design
- **JSON** for data storage instead of traditional databases
- **Animate.css** for engaging animations
- **Bootstrap Icons** for modern iconography
- **JavaScript** for enhanced user experience

## Why Database-Free?

- Easy deployment (no database setup required)
- Fast performance for small to medium projects
- Simple migration and backup
- Perfect for lightweight applications

## Requirements

- PHP 7.4 or higher
- Web server (Apache, Nginx, etc.)

## Installation

1. Download or clone the repository
2. Place the files in your server directory
3. Make sure the `uploads` and `data` directories are writable
4. Visit the site through your browser

```bash
# Clone the repository
git clone https://github.com/bakr21/project-management-system.git

# Navigate to the project directory
cd project-management-system

# Set write permissions for directories
chmod 777 uploads data
```

## Project Structure

```
├── controller/           # Controller files
├── data/                 # Data files (JSON)
├── helper/               # Helper functions
├── inc/                  # Header and footer files
├── uploads/              # Uploaded images directory
├── create.php            # Create new project page
├── edit.php              # Edit project page
├── index.php             # Home page
└── README.md             # Documentation file
```

## Usage

1. Home page: View all projects
2. Add project: Click on "Add New Project" button
3. Edit project: Click on "Edit" button next to the project
4. Delete project: Click on "Delete" button next to the project (image will be automatically deleted)

## Contributing

Contributions are welcome! Please send a pull request or open an issue to discuss proposed changes.

## License

This project is licensed under the [MIT License](LICENSE).
