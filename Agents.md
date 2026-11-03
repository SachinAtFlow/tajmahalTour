# AI Coding Assistant Rules & Guidelines

## 1. Project Tech Stack
- **Backend:** PHP (Native/Vanilla PHP, no heavy frameworks unless specified).
- **Frontend:** HTML5, CSS3, JavaScript (ES6+).
- **CSS Framework:** Bootstrap 5 (Always use Bootstrap 5 CDN classes, do not write custom CSS if a Bootstrap utility class is available).

## 2. Mandatory File Structure & Includes
- NEVER write standalone HTML files without headers/footers.
- Always use the modular layout approach:
  - Header CDN and opening tags must come from `includes/header.php`.
  - Closing scripts and body tags must come from `includes/footer.php`.
- Every new page must start and end with:
  ```php
  <?php require_once 'includes/header.php'; ?>
  <!-- Page Content Here -->
  <?php require_once 'includes/footer.php'; ?>

## 3. Styling & CSS Variables (Colors, Fonts & Weights)
- **DO NOT** hardcode values for colors (e.g., `#ff0000`, `rgb(...)`), font families, font sizes, or font-weights in your CSS or inline styles.
- **ALWAYS** use predefined CSS variables for styling. For example:
  - Use `color: var(--primary-color);` instead of hardcoding color codes.
  - Use `font-family: var(--font-main);` and `font-weight: var(--font-weight-bold);`.
- If any new custom design or color is required, first declare it as a CSS variable inside the `:root` selector in `assets/css/style.css`, and then use that variable across components.

## 4. Handling Commented-Out Code (DO NOT UNCOMMENT)
- **DO NOT** remove comments, explain-comments, or uncomment any code blocks that are already commented out in the existing codebase or files.
- Treat commented-out code as strictly inactive. If a line or block of code is wrapped in comments (`//` or `/* ... */`), leave it exactly as it is unless the user explicitly commands you to enable, update, or delete it.

## 5. Code Efficiency & Best Practices
- **Write Minimal & Efficient Code:** Always write the most concise, readable, and efficient code possible. Avoid writing unnecessary wrapper functions, redundant markup, or bloated logic.
- **Suggest Best Practices:** Always suggest standard industry best practices for security (like input validation and PDO/prepared statements for database operations), scalability, and performance optimization when writing or refactoring code.