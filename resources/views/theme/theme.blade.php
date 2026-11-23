{{-- 
================================================================================
            FOOD GURU CHAKRA™ - CENTRALIZED THEME & STYLE SYSTEM
================================================================================
Purpose:
Single source of truth for all brand colors, typography, sizes and weights.
Any change made in this single file automatically reflects across all Blade views!
--}}

<!-- 1. Google Fonts Preconnect & Stylesheets -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<!-- 2. Centralized CSS Custom Variables & Design Tokens -->
<style>
    :root {
        /* ------------------------------------------------------------- */
        /* [A] COLOR PALETTE - CENTRAL CONTROL ROOM                      */
        /* ------------------------------------------------------------- */
        --theme-text-main: #09332E;          /* Primary Dark Pine / Teal Text */
        --theme-bg-primary: #FFFFFF;         /* Primary Background (White) */
        --theme-bg-secondary: #256F45;       /* Brand Green */
        --theme-bg-secondary-dark: #1C5535;  /* Brand Green Hover */
        --theme-bg-secondary-light: #EEF6EF; /* Brand Green Tint */
        --theme-bg-secondary-bg: #EEF6EF;    /* Secondary Section Background (#EEF6EF) */
        
        /* Accents */
        --theme-accent-gold: #E6A122;        /* Gold Highlight / Accent */
        --theme-accent-red: #F4320B;         /* Warm Red Accent */
        --theme-accent-blue: #0B51F4;        /* Royal Blue Accent */

        /* Borders & Muted Tones */
        --theme-border-light: #E8EFEA;
        --theme-border-divider: #E2EBE8;
        --theme-text-muted: #526963;

        /* ------------------------------------------------------------- */
        /* [B] TYPOGRAPHY SYSTEM (Poppins for body, Libre Baskerville for headings) */
        /* ------------------------------------------------------------- */
        --theme-font-heading: 'Libre Baskerville', serif;
        --theme-font-body: 'Poppins', sans-serif;

        /* Font Sizes */
        --theme-size-heading-xl: 32px;       /* Hero Main Title (2-line layout) */
        --theme-size-heading-md: 24px;       /* Subheadings & Section Titles */
        --theme-size-body: 18px;             /* Paragraphs & Primary Body text */
        --theme-size-body-sm: 14px;          /* Small descriptions & Pills */

        /* Font Weights */
        --theme-weight-normal: 400;
        --theme-weight-medium: 500;
        --theme-weight-semibold: 600;
        --theme-weight-bold: 700;
    }

    /* Global Element Bindings */
    h1, h2, h3, h4, .font-heading {
        font-family: var(--theme-font-heading);
        color: var(--theme-text-main);
    }

    body, p, span, button, a, input, select, textarea, .font-body {
        font-family: var(--theme-font-body);
        font-weight: 500;
    }

    p {
        font-weight: 500;
    }
</style>
