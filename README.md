# Pintu Web — UI Slicing

A frontend slicing project replicating the landing page of **Pintu**, an Indonesian cryptocurrency trading platform. Built as a frontend development exercise with a focus on UI components, layout, and responsiveness.

![Demo](src/assets/demo.png)

---

## Overview

This project visually replicates the pintu.id landing page, covering everything from the navigation bar and hero section down to the content sections below. All components are built with React and styled manually without relying on any large UI library.

---

## Tech Stack

| Technology | Description |
|---|---|
| **React 18** | Main library for building UI components |
| **Vite** | Build tool and development server |
| **Bootstrap 5** | Used minimally for the grid system and utility classes |
| **Custom CSS** | Primary styling written manually in `public/css/style.css` |

---

## Features

- Responsive navbar with language dropdown and mobile menu
- Hero section with phone mockup aligned to the bottom
- Trust bar displaying regulatory institution logos (Kominfo, Kemendag, etc.)
- Feature cards with hover effects
- Auto-scrolling cryptocurrency price ticker
- Top 5 crypto assets displayed in a horizontally scrollable card list
- App feature highlight section
- Interactive investment simulation calculator with range sliders

---

## Getting Started

Make sure **Node.js** is installed, then run the following commands:

```bash
# Install dependencies
npm install

# Start the development server
npm run dev
```

Open `http://localhost:5173` in your browser to view the result.

To create a production build:

```bash
npm run build
```

---

## Project Structure

```
src/
├── assets/
│   └── demo.png          # Project preview screenshot
├── components/
│   ├── Navbar.jsx
│   ├── Hero.jsx
│   ├── SponsorBar.jsx
│   ├── FeatureCards.jsx
│   ├── Ticker.jsx
│   ├── CryptoAssets.jsx
│   ├── SatuAplikasi.jsx
│   └── Investasi.jsx
├── App.jsx
└── main.jsx

public/
├── css/
│   └── style.css         # All custom styles
└── img/                  # Image assets (logos, icons, device mockups)
```

---

> This project was created solely for learning and UI slicing practice. It has no affiliation with Pintu.id.
