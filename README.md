# a-design

A WordPress theme with a simple page structure system for consistent section spacing, container width, and background themes.

## Page Structure CSS

The layout rules live in `assets/css/page-structure.css`.

This file is desktop-first. The `.container` keeps content centered with one fixed max-width, while `.section` controls responsive spacing across breakpoints.

## Core Classes

### `.section`

Use `.section` on every major page section.

It provides:

- `width: 100%`
- top and bottom spacing
- responsive left and right page padding

Example:

```html
<section class="section primary">
    <div class="container">
        <h1>Section Title</h1>
        <p>Section content goes here.</p>
    </div>
</section>
```

### `.container`

Use `.container` inside `.section`.

It provides:

- `max-width: 1620px`
- centered content with `margin: 0 auto`
- fluid width on smaller screens

The container width does not change at each breakpoint. Only the section padding changes.

### Background Theme Classes

Use one background class with each section:

| Class | Background |
| --- | --- |
| `.primary` | White |
| `.secondary` | Light gray `#f4f6f9` |
| `.tertiary` | Dark navy `#1a1a2e` |

Example:

```html
<section class="section secondary">
    <div class="container">
        <h2>Services</h2>
    </div>
</section>
```

## Section Spacing

`.section` changes padding based on viewport width.

| Viewport | Top / Bottom | Left / Right |
| --- | ---: | ---: |
| 1920px and above | 64px | 120px |
| 1618px and below | 64px | 75px |
| 1199px and below | 56px | 48px |
| 992px and below | 48px | 32px |
| 768px and below | 40px | 24px |
| 480px and below | 32px | 16px |

## Recommended Template Pattern

For WordPress templates, build sections like this:

```php
<section class="section primary">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</section>
```

Use this pattern for homepage sections, page templates, archive blocks, and reusable theme sections.

## Layout Rules

- Put `.section` on the outer section element.
- Put `.container` directly inside `.section`.
- Add one background theme class to the section.
- Do not add custom horizontal padding to inner content unless the design specifically needs it.
- Keep the `.container` max-width consistent across pages.
