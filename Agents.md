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

## 6. Brand Name vs Scope Domain (Taj Mahal Tour Scope Rule)
- **CRITICAL:** The project/brand name is "Taj Mahal" (or contains "Taj Mahal"), but the business scope spans across all of **North India & neighboring regions** (Delhi, Rajasthan, Gujarat, Punjab, Nepal, Himachal Pradesh, Uttar Pradesh, and Uttarakhand).
- **DO NOT ASSUME AGRA-ONLY FOCUS:** Never restrict generated content, sample cards, tour itineraries, destination lists, or landing pages exclusively to Agra, the Taj Mahal monument, or Uttar Pradesh unless explicitly requested.
- **DIVERSITY IN EXAMPLES:** Whenever generating dynamic content, mock data, destination grids, package listings, or hero sections:
  - Provide a balanced mix of destinations across all covered regions (e.g., Jaipur/Rajasthan, Shimla/Himachal, Kathamandu/Nepal, Golden Temple/Punjab, Rann of Kutch/Gujarat, Rishikesh/Uttarakhand).
  - Treat "Taj Mahal" purely as a **Brand Identity/Logo Name**, NOT as the regional scope of the website.

  ## 7. Mandatory Unique IDs for Layout Sections
- **ALWAYS** assign a unique and descriptive `id` attribute to every new main HTML `<section>`, `<header>`, `<footer>`, or major container element created.
- **Naming Convention for IDs:** 
  - Keep IDs simple, lowercase, and relevant to the section's content (e.g., `<section id="hero-banner">`, `<section id="tour-packages">`, `<section id="testimonials">`).
  - Use kebab-case (hyphen separated) for multi-word IDs (e.g., `id="contact-form"`, not `id="contactForm"` or `id="contact_form"`).
- **Purpose:** This ensures smooth smooth-scroll navigation, deep-linking, and clean JavaScript targeting across components.


## 8. Global JavaScript Files (`config.js` & `utils.js`)
- **Location:** Both `config.js` and `utils.js` must reside directly inside the root `assets/js/` folder (i.e., `assets/js/config.js` and `assets/js/utils.js`).
- **`config.js` (Configuration & Constants):**
  - Use this file strictly for global variables, API base URLs, site-wide constants, or environment configurations.
  - **DO NOT** write event listeners or DOM manipulation logic inside `config.js`.
- **`utils.js` (Helper & Utility Functions):**
  - Use this file for pure, reusable helper functions (e.g., date formatters, currency converters, local storage wrappers, validation helpers, or DOM element query shortcuts).
  - Functions here should be modular and independent so they can be imported or used across multiple page scripts.
- **Loading Order in `footer.php`:** When including scripts, `config.js` and `utils.js` must always be loaded **before** any component-specific or page-specific scripts to prevent undefined variable/function errors.

## 9. Section-Based Modular Architecture (`section/` folder pattern)
- **Dedicated Section Files:** Every distinct content block or page section (e.g., hero banner, tour packages, testimonials, footer) must be built as a separate file inside a dedicated `section/` folder (e.g., `section/hero.php`, `section/packages.php`, `section/footer.php`).
- **Implementation Structure in Pages (`index.php`, etc.):** 
  - Never write raw section content directly inside master pages like `index.php`.
  - Always wrap each section inside an HTML `<section>` tag with appropriate CSS classes, and include the file using `require_once`:
    ```php
    <section class="hero-section py-5">
        <?php 
        require_once 'section/hero.php'; 
        ?>
    </section>
    ```
- **Folder Structure Check:** Ensure all section files are strictly organized inside the root `section/` directory.