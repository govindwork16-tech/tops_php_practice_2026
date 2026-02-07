# Web Development Fundamentals

## 1. HTML Basics

### What is HTML? Explain its structure.

HTML (HyperText Markup Language) is the foundation of web pages. It provides structure and content using tags and elements.

Basic structure:
```html
<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
  </head>
  <body>
    <h1>Hello</h1>
  </body>
</html>
```

### Describe the purpose of HTML tags.

HTML tags instruct the browser how to display content. Common tags: `<h1>-<h6>` (headings), `<p>` (paragraphs), `<a>` (links), `<img>` (images), `<ul>/<ol>` (lists), `<div>` (containers).

### Block-level vs Inline Elements

Block-level elements take full width and start new lines: `<div>`, `<p>`, `<h1>`, `<section>`.

Inline elements flow within text: `<span>`, `<a>`, `<strong>`, `<em>`.

### Semantic HTML

Use meaningful tags like `<nav>`, `<header>`, `<article>` instead of generic `<div>` tags. Benefits: better accessibility, SEO, and maintainability.

---

## 2. CSS Fundamentals

### What is CSS?

CSS (Cascading Style Sheets) handles styling and layout. HTML provides structure; CSS makes it look good.

### Three Ways to Apply CSS

1. **Inline**: `<p style="color: red;">Text</p>`
2. **Internal**: `<style>p { color: red; }</style>` in `<head>`
3. **External**: `<link rel="stylesheet" href="styles.css">` (best practice)

### CSS Selectors

Element: `p { }` | Class: `.highlight { }` | ID: `#header { }` | Attribute: `input[type="text"] { }` | Pseudo-class: `a:hover { }`

### Box Model

Content → Padding (inside space) → Border → Margin (outside space)

Example: `div { padding: 10px; border: 2px solid; margin: 20px; }`

---

## 3. Responsive Web Design

### What is Responsive Web Design?

Creating websites that work on all screen sizes (mobile, tablet, desktop). Important because most users browse on phones.

### Media Queries

Apply different styles based on screen size:
```css
@media (max-width: 768px) {
  .container { grid-template-columns: 300px 300px; }
}
@media (max-width: 480px) {
  .container { grid-template-columns: 200px; }
}
```

### Mobile-First Approach

Start designing for mobile, then add features for larger screens. Benefits: better performance, forced prioritization, easier maintenance.
