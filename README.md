# Laravel 12 RouteServiceProvider Configuration Tutorial

This repository demonstrates how to configure custom route files in Laravel 12 using the new routing structure inside `bootstrap/app.php`. Laravel 12 removes the need to modify `RouteServiceProvider.php`, making route configuration simpler and more centralized.

## 🚀 Introduction

In Laravel 12, route registration is handled through the `withRouting()` method inside `bootstrap/app.php`.  
This project shows how to:

- Create custom route files (e.g., `admin.php`)
- Register custom route groups
- Apply middleware and prefixes
- Understand the new Laravel 12 routing changes
