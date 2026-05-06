<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>Instant Quote | Accurate Signs &amp; Engraving</title>
    <style>
        :root {
            --brand: #640100;
            --brand-dark: #4a0000;
            --accent: #b87333;
            --ink: #000000;
            --muted: #5d5d5d;
            --line: #e5e5e5;
            --card: #ffffff;
            --page: #f8f8f2;
            --shadow: 0 10px 28px rgba(0, 0, 0, 0.08);
            --shadow-soft: 0 6px 18px rgba(0, 0, 0, 0.05);
            --radius: 14px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            color: var(--ink);
            background: var(--page);
        }

        .page {
            max-width: 1220px;
            margin: 0 auto;
            padding: 42px 24px 72px;
        }

        .hero,
        .layout {
            display: grid;
            gap: 24px;
            align-items: start;
        }

        .hero {
            grid-template-columns: 1fr;
            margin-bottom: 18px;
            gap: 14px;
        }

        .top-logo-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 34px 0 30px;
        }

        .hero-split {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 420px;
            gap: 24px;
            align-items: start;
        }

        .hero-main {
            display: grid;
            gap: 8px;
            min-width: 0;
        }

        .content-col {
            display: grid;
            gap: 10px;
            min-width: 0;
        }

        .hero-side {
            min-width: 0;
            align-self: stretch;
        }

        .how-it-works-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: var(--shadow-soft);
            padding: 24px;
            border: 1px solid #f0f0f0;
            display: grid;
            gap: 12px;
        }

        .how-it-works-title {
            font-size: 18px;
            font-weight: 700;
            margin: 0;
            color: #111827;
            line-height: 1.25;
        }

        .layout {
            grid-template-columns: minmax(0, 1fr) 420px;
        }

        .card {
            background: var(--card);
            border: none;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 24px;
        }

        .brand-sub {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--accent);
            margin: 0;
        }

        h1 {
            font-size: 36px;
            line-height: 1.08;
            margin: 0 0 10px;
            letter-spacing: -0.02em;
        }

        h2,
        h3,
        h4,
        p {
            margin-top: 0;
        }

        .hero-copy {
            font-size: 15px;
            line-height: 1.55;
            color: #374151;
            margin: 0;
            max-width: 720px;
        }

        .hero-points {
            margin: 0;
            padding-left: 18px;
            color: #374151;
            display: grid;
            gap: 8px;
            font-size: 14px;
            line-height: 1.45;
        }

        .section-head {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            align-items: flex-start;
            margin-bottom: 24px;
        }

        .badge {
            font-size: 13px;
            font-weight: 700;
            color: var(--brand);
            background: rgba(184, 115, 51, 0.10);
            border: none;
            border-radius: 999px;
            padding: 10px 12px;
        }

        form {
            display: grid;
            gap: 22px;
        }

        .step-card {
            border: none;
            border-radius: 14px;
            padding: 22px;
            background: #ffffff;
            box-shadow: var(--shadow-soft);
        }

        .group-title {
            font-size: 16px;
            font-weight: 700;
            margin: 0 0 12px;
        }

        .helper-text,
        .fine-print {
            font-size: 13px;
            color: var(--muted);
            line-height: 1.5;
            margin: 4px 0 0;
        }

        /* ── Compact field grid ── */
        .field-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px;
        }

        .field-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 10px;
        }

        .field-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 10px;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 5px;
            min-width: 0;
        }

        .field label {
            font-size: 12px;
            font-weight: 700;
            color: #374151;
        }

        /* ── Compact inputs ── */
        .field input,
        .field select,
        .field textarea,
        .field button {
            width: 100%;
            border: 1px solid var(--line);
            border-radius: 10px;
            padding: 7px 10px;
            font-size: 13px;
            color: var(--ink);
            background: #fff;
            font-family: inherit;
            transition: border-color 0.16s ease, box-shadow 0.16s ease;
        }

        .field textarea {
            min-height: 110px;
            resize: vertical;
        }

        .field input:focus,
        .field select:focus,
        .field textarea:focus {
            outline: none;
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(100, 1, 0, 0.09);
        }

        /* ── Global defaults bar ── */
        .global-defaults-bar {
            background: #f9f9f9;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 16px 20px;
            display: grid;
            gap: 10px;
        }

        .global-defaults-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
        }

        .global-defaults-title {
            font-size: 14px;
            font-weight: 700;
            color: var(--brand);
            margin: 0;
        }

        .global-apply-btn {
            font-size: 12px;
            font-weight: 700;
            color: var(--brand);
            background: #fff;
            border: 1px solid #efcfcf;
            border-radius: 8px;
            padding: 5px 10px;
            cursor: pointer;
            white-space: nowrap;
        }

        .global-apply-btn:hover {
            background: #fff0f0;
        }

        /* ── Sign card ── */
        .sign-stack {
            display: grid;
            gap: 16px;
        }

        .sign-card {
            border: 1px solid #ece7e7;
            border-radius: 14px;
            background: #fff;
            padding: 0;
            display: grid;
            box-shadow: var(--shadow-soft);
            overflow: hidden;
        }

        .sign-card-header {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            align-items: center;
            background: #fafafa;
            border-bottom: 1px solid #f0f0f0;
            padding: 10px 16px;
        }

        .sign-card-title {
            font-size: 14px;
            font-weight: 700;
            color: #111827;
        }

        .sign-card-body {
            padding: 14px 16px;
            display: grid;
            gap: 12px;
        }

        .sign-card-controls,
        .sign-card-actions,
        .qty-tools,
        .size-tools {
            display: flex;
            gap: 8px;
            flex-wrap: nowrap;
            align-items: center;
        }

        .icon-btn,
        .sign-icon-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border: 1px solid var(--line);
            border-radius: 8px;
            background: #fff;
            color: #5d5d5d;
            padding: 0;
            cursor: pointer;
            transition: border-color 0.14s, color 0.14s, background 0.14s;
        }

        .icon-btn:hover,
        .sign-icon-btn:hover {
            border-color: rgba(184, 115, 51, 0.35);
            color: var(--brand);
            background: #fff;
        }

        .icon-btn svg,
        .sign-icon-btn svg {
            width: 15px;
            height: 15px;
            display: block;
            stroke: currentColor;
        }

        /* ── Per-tag details panel ── */
        .tag-details-panel {
            background: #f9f9f9;
            border: 1px solid #f0f0f0;
            border-radius: 12px;
            padding: 12px;
            display: grid;
            gap: 8px;
        }

        .tag-details-toggle {
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            user-select: none;
        }

        .tag-details-toggle-label {
            font-size: 12px;
            font-weight: 700;
            color: var(--brand);
        }

        .tag-details-toggle svg {
            width: 14px;
            height: 14px;
            stroke: var(--brand);
            transition: transform 0.18s;
        }

        .tag-details-toggle.open svg {
            transform: rotate(180deg);
        }

        .tag-details-fields {
            display: grid;
            gap: 8px;
            margin-top: 4px;
        }

        .tag-details-fields.hidden {
            display: none;
        }

        /* ── Text section inside sign card ── */
        .sign-inline-grid {
            display: grid;
            gap: 10px;
        }

        .hidden {
            display: none !important;
        }

        .text-edit-wrap {
            position: relative;
        }

        .sign-text {
            min-height: 100px;
            line-height: 1.45;
            padding: 8px 10px;
            font-size: 13px;
            border: 1px solid var(--line);
            border-radius: 10px;
            width: 100%;
            background: #fff;
            resize: vertical;
            font-family: inherit;
        }

        .sign-text:focus {
            outline: none;
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(100, 1, 0, 0.09);
        }

        .sign-global-controls {
            display: flex;
            gap: 8px;
            align-items: center;
            flex-wrap: wrap;
        }

        .compact-align-group {
            display: inline-flex;
            gap: 3px;
            padding: 2px;
            border: 1px solid #e5e7eb;
            border-radius: 9px;
            background: #fff;
        }

        .compact-align-btn {
            appearance: none;
            border: 1px solid transparent;
            background: transparent;
            color: #9ca3af;
            cursor: pointer;
            width: 28px;
            height: 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 7px;
            padding: 0;
        }

        .compact-align-btn svg {
            width: 14px;
            height: 14px;
            stroke: currentColor;
        }

        .compact-align-btn.active {
            background: #fff1f1;
            border-color: #efcfcf;
            color: var(--brand);
        }

        .qty-row {
            display: grid;
            grid-template-columns: 140px auto;
            gap: 8px;
            align-items: end;
        }

        .sign-size-row {
            display: grid;
            grid-template-columns: 1fr 1fr auto;
            gap: 8px;
            align-items: end;
        }

        .line-inline-panel {
            display: grid;
            gap: 6px;
            border: 1px solid #f0f0f0;
            border-radius: 10px;
            background: #fbfbfb;
            padding: 10px;
        }

        .line-inline-row {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 60px 120px 130px;
            gap: 6px;
            align-items: center;
            padding: 4px 0;
        }

        .line-inline-row+.line-inline-row {
            border-top: 1px dashed #e5e7eb;
        }

        .line-inline-label {
            min-width: 0;
            font-size: 11px;
            color: #4b5563;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .line-inline-row select,
        .line-inline-row input {
            width: 100%;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 6px 8px;
            font-size: 11px;
            background: #fff;
            color: var(--ink);
            font-family: inherit;
        }

        .line-inline-height-wrap {
            display: flex;
            gap: 6px;
            align-items: center;
            min-width: 0;
        }

        .line-inline-bold {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-size: 11px;
            color: #374151;
            white-space: nowrap;
        }

        .line-inline-bold input {
            width: auto;
            margin: 0;
            accent-color: var(--brand);
        }

        .line-inline-row[data-line-selected="true"] {
            background: #fff4f4;
            border-radius: 8px;
        }

        .line-inline-apply-btn {
            font-size: 11px;
            font-weight: 600;
            color: var(--brand);
            background: #fff;
            border: 1px solid #efcfcf;
            border-radius: 8px;
            padding: 5px 8px;
            cursor: pointer;
            white-space: nowrap;
        }

        .line-inline-apply-btn:hover {
            background: #fff0f0;
        }

        .line-inline-row.active {
            background: #fff8f8;
            border-radius: 8px;
            padding-left: 4px;
            padding-right: 4px;
        }

        /* ── Condense row ── */
        .condense-row {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .condense-row label {
            font-size: 12px;
            font-weight: 700;
            color: #374151;
            white-space: nowrap;
        }

        .condense-row select {
            border: 1px solid var(--line);
            border-radius: 8px;
            padding: 6px 10px;
            font-size: 12px;
            color: var(--ink);
            background: #fff;
            font-family: inherit;
        }

        /* ── Buttons ── */
        .btn {
            appearance: none;
            border: none;
            cursor: pointer;
            border-radius: 12px;
            padding: 12px 18px;
            font-size: 14px;
            font-weight: 700;
            font-family: inherit;
            transition: transform 0.14s, opacity 0.14s, background 0.14s;
        }

        .btn:hover {
            transform: translateY(-1px);
        }

        .btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .btn-primary {
            background: var(--brand);
            color: #fff;
            box-shadow: 0 10px 20px rgba(100, 1, 0, 0.18);
        }

        .btn-primary:hover {
            background: var(--brand-dark);
        }

        .btn-secondary {
            background: #fff;
            color: #1f2937;
            border: 1px solid var(--line);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
        }

        .btn-small {
            padding: 7px 10px;
            font-size: 12px;
            border-radius: 9px;
        }

        .right-column {
            display: grid;
            gap: 16px;
            align-self: start;
            position: sticky;
            top: 20px;
        }

        .preview-card,
        .summary-card {
            display: grid;
            gap: 16px;
            padding: 24px;
        }

        /* ── Preview surface with ruler ── */
        .preview-surface {
            border: 1px solid var(--line);
            border-radius: 16px;
            background: linear-gradient(180deg, #f8fafc 0%, #eef2f7 100%);
            min-height: 320px;
            padding: 0;
            display: grid;
            place-items: center;
            overflow: hidden;
            position: relative;
        }

        .preview-meta,
        .summary-block {
            border: 1px solid #f0f0f0;
            border-radius: 14px;
            background: #fff;
            padding: 16px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.03);
        }

        .preview-warning {
            display: none;
            border: 1px solid #f0c8c8;
            border-radius: 14px;
            background: #fff5f5;
            color: #8b2a2a;
            padding: 12px 14px;
            font-size: 12px;
            line-height: 1.5;
        }

        .preview-warning.show {
            display: block;
        }

        .summary-section-title {
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--brand);
            margin: 0 0 12px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            padding: 7px 0;
            font-size: 13px;
            align-items: baseline;
        }

        .summary-row span {
            color: var(--muted);
        }

        .summary-row+.summary-row {
            border-top: 1px dashed #e7e7e7;
        }

        /* ── Modals (unchanged structure) ── */
        .quote-modal-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.45);
            display: none;
            align-items: flex-start;
            justify-content: center;
            padding: 28px 20px;
            z-index: 1000;
            overflow-y: auto;
        }

        .quote-modal-backdrop.show {
            display: flex;
        }

        .quote-loading-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.28);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            z-index: 1001;
        }

        .quote-loading-backdrop.show {
            display: flex;
        }

        .quote-modal {
            width: min(680px, 100%);
            background: #fff;
            border: none;
            border-radius: 18px;
            box-shadow: 0 24px 52px rgba(15, 23, 42, 0.18);
            padding: 28px;
        }

        .quote-loading-card {
            width: min(360px, 100%);
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 20px;
            box-shadow: 0 20px 48px rgba(15, 23, 42, 0.16);
            padding: 28px 24px;
            text-align: center;
            display: grid;
            gap: 14px;
        }

        .quote-loading-spinner {
            width: 34px;
            height: 34px;
            border-radius: 999px;
            border: 3px solid #eadede;
            border-top-color: var(--brand);
            margin: 0 auto;
            animation: quoteSpin 0.8s linear infinite;
        }

        @keyframes quoteSpin {
            to {
                transform: rotate(360deg);
            }
        }

        .quote-modal-head {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            align-items: start;
            margin-bottom: 18px;
        }

        .quote-modal-title {
            margin: 0;
            font-size: 26px;
        }

        .quote-modal-close {
            appearance: none;
            border: 1px solid #ddd;
            background: #fff;
            color: #5d5d5d;
            width: 38px;
            height: 38px;
            border-radius: 12px;
            cursor: pointer;
            font-size: 20px;
            line-height: 1;
        }

        .quote-modal-grid {
            display: grid;
            grid-template-columns: 1fr 220px;
            gap: 18px;
            margin-bottom: 18px;
        }

        .quote-modal-card {
            border: 1px solid #f0f0f0;
            border-radius: 14px;
            background: #fff;
            padding: 16px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.03);
        }

        .quote-total {
            font-size: 34px;
            font-weight: 800;
            color: var(--brand);
            margin: 0;
        }

        .quote-lines {
            display: grid;
            gap: 10px;
        }

        .quote-minimum-note {
            font-size: 13px;
            color: var(--brand);
            background: #fff6f6;
            border: 1px solid #efcfcf;
            border-radius: 10px;
            padding: 10px 12px;
            margin-top: 10px;
        }

        .quote-line {
            display: flex;
            justify-content: space-between;
            gap: 14px;
            font-size: 14px;
            align-items: baseline;
        }

        .quote-line span:first-child {
            color: var(--muted);
        }

        .quote-items {
            display: grid;
            gap: 10px;
        }

        .quote-item {
            border: 1px solid #ece7e7;
            border-radius: 12px;
            background: #fff;
            padding: 12px;
            display: grid;
            gap: 6px;
        }

        .quote-item-title {
            font-weight: 700;
        }

        .quote-item-meta {
            font-size: 13px;
            color: var(--muted);
        }

        .quote-modal-actions {
            display: grid;
            gap: 12px;
            margin-top: 18px;
        }

        .quote-actions-top,
        .quote-actions-bottom {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .quote-actions-top {
            justify-content: flex-start;
        }

        .quote-actions-bottom {
            justify-content: space-between;
            align-items: center;
        }

        .btn-ghost {
            background: transparent;
            color: var(--muted);
            border: none;
            padding-left: 0;
            padding-right: 0;
            box-shadow: none;
        }

        .btn-ghost:hover {
            background: transparent;
            color: var(--ink);
            transform: none;
        }

        .btn-link-lite {
            background: transparent;
            color: var(--muted);
            border: none;
            padding: 0;
            font-weight: 600;
            border-radius: 0;
            box-shadow: none;
        }

        .btn-link-lite:hover {
            background: transparent;
            color: var(--ink);
            transform: none;
        }

        .btn-primary-strong {
            background: #640100;
            color: #fff;
            padding: 15px 26px;
            font-size: 16px;
            min-width: 190px;
        }

        .btn-primary-strong:hover {
            background: #4a0000;
        }

        .btn-secondary-light {
            background: #fff;
            color: #374151;
            border: 1px solid #d9dde3;
        }

        .btn-secondary-light:hover {
            background: #fafafa;
            border-color: #cfd4dc;
            color: #111827;
        }

        .validation-message {
            display: none;
            margin-top: 10px;
            padding: 10px 12px;
            border-radius: 10px;
            border: 1px solid #f0c8c8;
            background: #fff5f5;
            color: #8b2a2a;
            font-size: 13px;
            line-height: 1.45;
        }

        .validation-message.show {
            display: block;
        }

        /* ── Proof sheet ── */
        .proof-toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
            flex-wrap: wrap;
        }

        .proof-zoom-wrap {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--muted);
            font-size: 13px;
        }

        .proof-sheet-wrap {
            border: 1px solid var(--line);
            border-radius: 16px;
            background: #f3f4f6;
            padding: 16px;
            overflow: auto;
            max-height: 520px;
            max-width: 100%;
            overscroll-behavior: contain;
        }

        .proof-sheet-list {
            display: grid;
            gap: 18px;
            justify-items: start;
            width: max-content;
            min-width: 100%;
            transform-origin: top left;
        }

        .proof-sheet-page {
            width: min(100%, 980px);
            background: #fff;
            border: 1px solid #d9dde3;
            box-shadow: 0 10px 24px rgba(15, 23, 42, 0.08);
            border-radius: 12px;
            overflow: hidden;
        }

        .proof-sheet-page svg {
            display: block;
            width: 100%;
            height: auto;
            background: #fff;
        }

        @media (max-width:980px) {

            .hero,
            .layout {
                grid-template-columns: 1fr;
            }

            .hero-split {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .right-column {
                position: static;
            }
        }

        @media (max-width:720px) {
            .page {
                padding: 24px 14px 52px;
            }

            .card {
                padding: 20px;
            }

            h1 {
                font-size: 30px;
            }

            .field-grid,
            .field-grid-3,
            .field-grid-4,
            .qty-row,
            .line-inline-row,
            .quote-modal-grid {
                grid-template-columns: 1fr;
            }

            .sign-size-row {
                grid-template-columns: 1fr 1fr;
            }

            .section-head {
                flex-direction: column;
                align-items: stretch;
            }

            .quote-actions-top,
            .quote-actions-bottom {
                flex-direction: column;
                align-items: stretch;
            }

            .btn-primary-strong {
                min-width: 0;
                width: 100%;
            }

            .btn-ghost,
            .btn-secondary-light {
                width: 100%;
                padding-left: 14px;
                padding-right: 14px;
            }
        }

        /* ══════════════════════════════════════════
       AUTH BAR
    ══════════════════════════════════════════ */
        .auth-bar {
            background: #fff;
            border-bottom: 1px solid var(--line);
            padding: 10px 24px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 12px;
            position: sticky;
            top: 0;
            z-index: 200;
        }

        .auth-bar-inner {
            max-width: 1220px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 10px;
        }

        .auth-guest-msg {
            font-size: 12px;
            color: var(--muted);
        }

        .auth-btn-login {
            font-size: 12px;
            font-weight: 700;
            color: var(--brand);
            background: transparent;
            border: 1px solid #efcfcf;
            border-radius: 8px;
            padding: 6px 14px;
            cursor: pointer;
            font-family: inherit;
            transition: background 0.14s;
        }

        .auth-btn-login:hover {
            background: #fff8f8;
        }

        .auth-btn-register {
            font-size: 12px;
            font-weight: 700;
            color: #fff;
            background: var(--brand);
            border: none;
            border-radius: 8px;
            padding: 6px 14px;
            cursor: pointer;
            font-family: inherit;
            transition: background 0.14s;
        }

        .auth-btn-register:hover {
            background: var(--brand-dark);
        }

        /* logged-in user pill */
        .auth-user-bar {
            display: none;
            align-items: center;
            gap: 10px;
        }

        .auth-user-bar.visible {
            display: flex;
        }

        .auth-avatar {
            width: 30px;
            height: 30px;
            border-radius: 999px;
            background: var(--brand);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: 700;
            flex-shrink: 0;
        }

        .auth-user-name {
            font-size: 13px;
            font-weight: 600;
            color: #111827;
        }

        .auth-menu-btn {
            font-size: 12px;
            color: var(--muted);
            background: transparent;
            border: 1px solid var(--line);
            border-radius: 8px;
            padding: 5px 10px;
            cursor: pointer;
            font-family: inherit;
        }

        .auth-menu-btn:hover {
            border-color: #ccc;
            color: #111;
        }

        .auth-logout-btn {
            font-size: 12px;
            color: var(--muted);
            background: transparent;
            border: none;
            cursor: pointer;
            font-family: inherit;
            padding: 0;
        }

        .auth-logout-btn:hover {
            color: var(--brand);
        }

        /* draft save indicator */
        .draft-status {
            font-size: 11px;
            color: var(--muted);
            display: flex;
            align-items: center;
            gap: 5px;
            margin-right: 6px;
        }

        .draft-dot {
            width: 7px;
            height: 7px;
            border-radius: 999px;
            background: #d1d5db;
            flex-shrink: 0;
        }

        .draft-dot.saving {
            background: #f59e0b;
        }

        .draft-dot.saved {
            background: #22c55e;
        }

        /* ══════════════════════════════════════════
       AUTH MODAL
    ══════════════════════════════════════════ */
        .auth-modal-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.45);
            display: none;
            align-items: flex-start;
            justify-content: center;
            padding: 40px 20px;
            z-index: 1100;
            overflow-y: auto;
        }

        .auth-modal-backdrop.show {
            display: flex;
        }

        .auth-modal {
            width: min(460px, 100%);
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 24px 52px rgba(15, 23, 42, 0.18);
            padding: 28px;
        }

        .auth-modal-head {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 20px;
        }

        .auth-modal-title {
            font-size: 22px;
            font-weight: 700;
            margin: 0;
            line-height: 1.2;
        }

        .auth-modal-sub {
            font-size: 13px;
            color: var(--muted);
            margin: 4px 0 0;
        }

        .auth-modal-close {
            appearance: none;
            border: 1px solid #ddd;
            background: #fff;
            color: #5d5d5d;
            width: 34px;
            height: 34px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 18px;
            line-height: 1;
        }

        .auth-modal form {
            display: grid;
            gap: 14px;
        }

        .auth-modal-error {
            display: none;
            background: #fff5f5;
            border: 1px solid #efcfcf;
            color: #8b2a2a;
            border-radius: 10px;
            padding: 10px 12px;
            font-size: 13px;
            line-height: 1.45;
        }

        .auth-modal-error.show {
            display: block;
        }

        .auth-modal-footer {
            margin-top: 14px;
            font-size: 13px;
            color: var(--muted);
            text-align: center;
        }

        .auth-modal-footer a {
            color: var(--brand);
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
        }

        .auth-modal-footer a:hover {
            text-decoration: underline;
        }

        .auth-loading-row {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            color: var(--muted);
        }

        .auth-spinner {
            width: 18px;
            height: 18px;
            border-radius: 999px;
            border: 2px solid #eadede;
            border-top-color: var(--brand);
            animation: quoteSpin 0.8s linear infinite;
            flex-shrink: 0;
        }

        /* ══════════════════════════════════════════
       ACCOUNT PANEL MODAL
    ══════════════════════════════════════════ */
        .account-modal-backdrop {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.45);
            display: none;
            align-items: flex-start;
            justify-content: center;
            padding: 28px 20px;
            z-index: 1100;
            overflow-y: auto;
        }

        .account-modal-backdrop.show {
            display: flex;
        }

        .account-modal {
            width: min(680px, 100%);
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 24px 52px rgba(15, 23, 42, 0.18);
            padding: 0;
            overflow: hidden;
        }

        .account-modal-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 24px;
            border-bottom: 1px solid var(--line);
        }

        .account-modal-title {
            font-size: 20px;
            font-weight: 700;
            margin: 0;
        }

        .account-tabs {
            display: flex;
            gap: 2px;
            padding: 12px 24px 0;
            border-bottom: 1px solid var(--line);
            background: #fafafa;
        }

        .account-tab {
            font-size: 13px;
            font-weight: 600;
            color: var(--muted);
            background: transparent;
            border: none;
            border-bottom: 2px solid transparent;
            padding: 8px 14px 10px;
            cursor: pointer;
            font-family: inherit;
            margin-bottom: -1px;
        }

        .account-tab.active {
            color: var(--brand);
            border-bottom-color: var(--brand);
        }

        .account-panel {
            display: none;
            padding: 20px 24px 24px;
        }

        .account-panel.active {
            display: block;
        }

        .account-list {
            display: grid;
            gap: 10px;
        }

        .account-item {
            border: 1px solid #ece7e7;
            border-radius: 12px;
            padding: 14px 16px;
            display: grid;
            gap: 6px;
            background: #fff;
        }

        .account-item-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
        }

        .account-item-title {
            font-size: 14px;
            font-weight: 700;
            color: #111827;
        }

        .account-item-meta {
            font-size: 12px;
            color: var(--muted);
        }

        .account-item-actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .account-action-btn {
            font-size: 12px;
            font-weight: 600;
            color: var(--brand);
            background: #fff;
            border: 1px solid #efcfcf;
            border-radius: 8px;
            padding: 5px 10px;
            cursor: pointer;
            font-family: inherit;
            white-space: nowrap;
        }

        .account-action-btn:hover {
            background: #fff8f8;
        }

        .account-action-btn.danger {
            color: #dc2626;
            border-color: #fca5a5;
        }

        .account-action-btn.danger:hover {
            background: #fff5f5;
        }

        .account-empty {
            text-align: center;
            padding: 32px 16px;
            color: var(--muted);
            font-size: 14px;
        }

        .account-empty-icon {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .save-template-row {
            display: flex;
            gap: 8px;
            align-items: center;
            margin-top: 4px;
        }

        .save-template-input {
            flex: 1;
            border: 1px solid var(--line);
            border-radius: 9px;
            padding: 7px 10px;
            font-size: 13px;
            font-family: inherit;
        }

        .save-template-input:focus {
            outline: none;
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(100, 1, 0, 0.09);
        }
    </style>
</head>

<body>
    <!-- ══ AUTH BAR ══ -->
    <div class="auth-bar" id="authBar">
        <div class="auth-bar-inner">
            <!-- Draft status (only shown when logged in) -->
            <div class="draft-status hidden" id="draftStatus">
                <div class="draft-dot" id="draftDot"></div>
                <span id="draftStatusText">Draft saved</span>
            </div>
            <!-- Guest state -->
            <div id="authGuestState" style="display:flex; align-items:center; gap:10px;">
                <span class="auth-guest-msg">Sign in to save templates &amp; reorder</span>
                <button type="button" class="auth-btn-login" id="authShowLogin">Sign In</button>
                <button type="button" class="auth-btn-register" id="authShowRegister">Create Account</button>
            </div>
            <!-- Logged-in state -->
            <div class="auth-user-bar" id="authUserState">
                <div class="auth-avatar" id="authAvatar">?</div>
                <span class="auth-user-name" id="authUserName"></span>
                <button type="button" class="auth-menu-btn" id="authAccountBtn">My Account</button>
                <button type="button" class="auth-logout-btn" id="authLogoutBtn">Sign out</button>
            </div>
        </div>
    </div>

    <main class="page">
        <section class="hero">
            <div class="top-logo-bar">
                <img src="https://accuratesigns.com/wp-content/uploads/2025/08/cropped-logo.png"
                    alt="Accurate Signs &amp; Engraving"
                    style="display:block;width:auto;max-width:380px;max-height:120px;height:auto;" />
            </div>
            <div class="card">
                <div class="hero-split">
                    <div class="hero-main">
                        <div class="content-col">
                            <div class="brand-sub">Instant Quote Portal</div>
                            <h1>Build your tags and generate a quote in a few steps.</h1>
                            <p class="hero-copy">Enter your tag details, review the live preview, and generate your
                                quote when you're ready.</p>
                        </div>
                    </div>
                    <aside class="hero-side">
                        <div class="card how-it-works-card">
                            <h3 class="how-it-works-title">How it works</h3>
                            <ul class="hero-points">
                                <li>Set global defaults at the top — they apply to all tags</li>
                                <li>Override color, holes, size, or shape per tag using Tag Details</li>
                                <li>Press Enter to add blank lines for spacing</li>
                                <li>Automatic Tag Sizing can suggest a starting size</li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section class="layout">
            <div class="card">
                <div class="section-head">
                    <div>
                        <h2>Get Instant Quote</h2>
                        <div class="field" style="max-width:340px; margin:10px 0 4px;">
                            <label for="jobName" class="group-title"
                                style="color:var(--brand); display:block; margin-bottom:6px; font-size:16px;">Job
                                name</label>
                            <input id="jobName" name="jobName" type="text" placeholder="e.g. 123 Main Street" />
                        </div>
                    </div>
                    <div class="badge">Version 5.6</div>
                </div>

                <form id="quoteForm">

                    <!-- ══ GLOBAL DEFAULTS ══ -->
                    <section class="step-card">
                        <p class="group-title">Global defaults <span
                                style="font-size:12px;font-weight:400;color:var(--muted);">— applied to all tags unless
                                overridden</span></p>
                        <p class="helper-text" style="margin-bottom:14px;">Set global defaults below, then customize
                            each tag individually if needed.</p>

                        <div
                            style="border:1px solid #f0c8c8; border-radius:14px; background:#fff5f5; color:#8b2a2a; padding:12px 14px; font-size:12px; line-height:1.5; margin-bottom:10px;">
                            Any changes made here will automatically apply to all tags.
                        </div>

                        <div class="global-defaults-bar">

                            <!-- Row 1: Color, Holes, Hole size, Shape, Corner radius -->
                            <div class="field-grid-4" style="grid-template-columns:repeat(5,minmax(0,1fr));">
                                <div class="field">
                                    <label for="globalColor">Color</label>
                                    <select id="globalColor" name="globalColor">
                                        <option value="black_white" selected>Black / White</option>
                                        <option value="white_black">White / Black</option>
                                        <option value="white_red">White / Red</option>
                                        <option value="yellow_black">Yellow / Black</option>
                                        <option value="yellow_red">Yellow / Red</option>
                                        <option value="red_white">Red / White</option>
                                        <option value="green_white">Green / White</option>
                                        <option value="blue_white">Blue / White</option>
                                        <option value="gray_white">Grey / White</option>
                                        <option value="brown_white">Brown / White</option>
                                        <option value="orange_white">Orange / White</option>
                                        <option value="orange_black">Orange / Black</option>
                                        <option value="purple_white">Purple / White</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="holes">Holes</label>
                                    <select id="holes" name="holes">
                                        <option value="No holes" selected>No holes</option>
                                        <option value="1 hole left">1 hole left</option>
                                        <option value="1 hole right">1 hole right</option>
                                        <option value="2 holes">2 holes</option>
                                        <option value="4 holes">4 holes</option>
                                        <option value="6 holes">6 holes</option>
                                        <option value="Cable tie slots">Cable tie slots</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="holeSize">Hole size</label>
                                    <select id="holeSize" name="holeSize" disabled>
                                        <option value="N/A" selected>N/A</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="shape">Shape</label>
                                    <select id="shape" name="shape">
                                        <option value="Rectangle" selected>Rectangle</option>
                                        <option value="Square">Square</option>
                                        <option value="Circle">Circle</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="globalCornerRadius">Corner radius</label>
                                    <select id="globalCornerRadius" name="globalCornerRadius">
                                        <option value="no" selected>No</option>
                                        <option value="yes">Yes (1/8")</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Row 2: Material, Font -->
                            <div class="field-grid" style="max-width:440px;">
                                <div class="field">
                                    <label for="material">Material</label>
                                    <select id="material" name="material">
                                        <option value="plastic" selected>Laser-engraved plastic</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <label for="fontFamily">Font</label>
                                    <select id="fontFamily" name="fontFamily">
                                        <option value="Arial, Helvetica, sans-serif" selected>Arial</option>
                                        <option value="'MS Gothic', monospace">MS Gothic</option>
                                        <option value="'Switzerland Condensed', 'Arial Narrow', Arial, sans-serif">
                                            Switzerland Condensed</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Row 3: Size mode + dimensions -->
                            <div class="field" style="max-width:280px;">
                                <label for="sameSizeMode">Size mode</label>
                                <select id="sameSizeMode" name="sameSizeMode">
                                    <option value="same" selected>Same size for all tags</option>
                                    <option value="custom">Custom size per tag</option>
                                    <option value="auto">Automatic tag sizing</option>
                                </select>
                            </div>
                            <div class="field-grid" style="max-width:340px;" id="globalSizeWrap">
                                <div class="field" id="globalHeightField">
                                    <label for="heightIn" id="globalHeightLabel">Height (in.)</label>
                                    <input id="heightIn" name="heightIn" type="number" min="0.25" step="0.001"
                                        value="1.000" required />
                                </div>
                                <div class="field">
                                    <label for="widthIn" id="globalWidthLabel">Width (in.)</label>
                                    <input id="widthIn" name="widthIn" type="number" min="0.25" step="0.001"
                                        value="3.000" required />
                                </div>
                            </div>

                            <!-- Row 4: Condense -->
                            <div style="display:flex;align-items:center;gap:14px;flex-wrap:wrap;">
                                <div class="field" style="flex:0 0 auto;">
                                    <label for="globalCondense">Condense all tags</label>
                                    <select id="globalCondense"
                                        style="border:1px solid var(--line);border-radius:8px;padding:6px 10px;font-size:12px;font-family:inherit;background:#fff;color:var(--ink);">
                                        <option value="no" selected>No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                </div>
                                <div style="flex:0 0 auto;padding-top:16px;">
                                    <button type="button" id="autoCondenseBtn" class="global-apply-btn"
                                        style="background:#fff;white-space:nowrap;">⚡ Auto-condense overflowing
                                        tags</button>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- ══ TAG TEXT ══ -->
                    <section class="step-card">
                        <p class="group-title">Tag text</p>
                        <p class="helper-text" style="margin-bottom:12px;">Each box = one tag. Each line = one line on
                            the tag. Use Tag Details below each box to override color, holes, or size for that tag.</p>
                        <div class="sign-stack" id="signStack"></div>
                        <div style="margin-top:10px;">
                            <button type="button" class="btn btn-secondary btn-small" id="addSignBtn">+ Add another
                                tag</button>
                        </div>
                        <input id="lineCount" name="lineCount" type="hidden" value="1" />
                    </section>

                    <!-- ══ CONTACT ══ -->
                    <section class="step-card">
                        <p class="group-title">Contact information</p>
                        <div class="field-grid">
                            <div class="field">
                                <label for="customerName">Name</label>
                                <input id="customerName" name="customerName" type="text" placeholder="Jane Smith"
                                    required />
                            </div>
                            <div class="field">
                                <label for="companyName">Company</label>
                                <input id="companyName" name="companyName" type="text" placeholder="ABC Electric" />
                            </div>
                            <div class="field">
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email" placeholder="jane@company.com" required />
                            </div>
                            <div class="field">
                                <label for="phone">Phone</label>
                                <input id="phone" name="phone" type="tel" placeholder="(555) 555-5555" />
                            </div>
                        </div>
                        <!-- Account nudge — shown when email is filled and user is not logged in -->
                        <div id="accountNudge" class="hidden"
                            style="margin-top:12px; display:flex; align-items:center; justify-content:space-between; gap:12px; background:#fdf6f0; border:1px solid #e8c4a0; border-radius:10px; padding:10px 14px; flex-wrap:wrap;">
                            <div style="display:flex; align-items:center; gap:10px; min-width:0;">
                                <svg width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="#b87333"
                                    stroke-width="1.6" style="flex-shrink:0;">
                                    <circle cx="10" cy="7" r="3" />
                                    <path d="M4 17c0-3.314 2.686-6 6-6s6 2.686 6 6" />
                                </svg>
                                <span style="font-size:13px; color:#7a4a1e; line-height:1.4;">Looks like you don't have
                                    an account. <strong>Create one free</strong> for faster checkout &amp; saving
                                    templates.</span>
                            </div>
                            <div style="display:flex; gap:8px; flex-shrink:0;">
                                <button type="button" id="nudgeCreateAccountBtn" class="btn btn-small"
                                    style="background:var(--accent); color:#fff; border:none; font-size:12px; padding:6px 14px; border-radius:8px; white-space:nowrap;">Create
                                    free account</button>
                                <button type="button" id="nudgeDismissBtn"
                                    style="background:transparent; border:none; color:#d4a574; font-size:18px; line-height:1; cursor:pointer; padding:0 2px;"
                                    aria-label="Dismiss">&times;</button>
                            </div>
                        </div>
                    </section>

                    <div class="step-card" style="border:1px solid #efcfcf; background:#fff8f8;">
                        <p class="group-title" style="margin-bottom:6px;">Ready to see your price?</p>
                        <p class="helper-text" style="margin-bottom:12px;">No commitment — review your quote before
                            ordering.</p>
                        <div style="display:flex; flex-direction:column; gap:10px;">
                            <button type="submit" class="btn btn-primary" id="generateBtn"
                                style="font-size:15px; padding:14px 22px;">Generate Instant Quote</button>
                            <div style="display:flex; gap:10px;">
                                <button type="button" class="btn btn-secondary" id="saveAsTemplateBtn"
                                    style="flex:1;">💾 Save as Template</button>
                                <button type="button" class="btn btn-secondary" id="resetBtn"
                                    style="flex:1;">Reset</button>
                            </div>
                        </div>
                        <div id="saveTemplateInline" class="hidden"
                            style="margin-top:10px; display:flex; gap:8px; align-items:center;">
                            <input type="text" id="saveTemplateInlineName" placeholder="Template name…" maxlength="60"
                                style="flex:1; border:1px solid var(--line); border-radius:9px; padding:7px 10px; font-size:13px; font-family:inherit;" />
                            <button type="button" class="btn btn-primary btn-small"
                                id="saveTemplateInlineConfirm">Save</button>
                            <button type="button" class="btn btn-secondary btn-small"
                                id="saveTemplateInlineCancel">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- ══ RIGHT COLUMN ══ -->
            <div class="right-column">
                <aside class="card preview-card">
                    <div>
                        <h3 style="margin:0 0 6px; line-height:1.25;">Live Design Preview</h3>
                        <p class="helper-text">Colors are for reference only and may vary in the final product.</p>
                    </div>
                    <div class="field" style="margin-top:2px;">
                        <label for="previewSignSelect">Preview sign</label>
                        <select id="previewSignSelect"></select>
                    </div>
                    <div class="preview-surface">
                        <svg id="designPreviewSvg" viewBox="0 0 420 300" width="100%" height="100%"
                            aria-label="Design preview"></svg>
                    </div>
                    <div class="preview-meta" id="designPreviewMeta">Start entering your sign details to see a live
                        preview.</div>
                    <div class="preview-warning" id="previewWarning"></div>
                </aside>

                <aside class="card summary-card">
                    <h3 style="margin:0 0 12px; line-height:1.25;">Order Summary</h3>
                    <p class="helper-text">Quick overview of your current selection.</p>
                    <div class="summary-block">
                        <p class="summary-section-title">Overview</p>
                        <div class="summary-row"><span>Total pieces</span><strong id="summaryQty">—</strong></div>
                        <div class="summary-row"><span>Size</span><strong id="summarySize">—</strong></div>
                        <div class="summary-row"><span>Material</span><strong id="summaryMaterial">—</strong></div>
                        <div class="summary-row"><span>Color</span><strong id="summaryColor">—</strong></div>
                        <div class="summary-row"><span>Font</span><strong id="summaryFont">—</strong></div>
                    </div>
                    <div class="summary-block">
                        <p class="summary-section-title">Setup</p>
                        <div class="summary-row"><span>Hole quantity</span><strong id="summaryHoles">—</strong></div>
                        <div class="summary-row"><span>Hole size</span><strong id="summaryHoleSize">—</strong></div>
                        <div class="summary-row"><span>Shape</span><strong id="summaryShape">—</strong></div>
                    </div>
                </aside>
            </div>
        </section>
    </main>

    <!-- ══ AUTH MODAL (Login / Register) ══ -->
    <div class="auth-modal-backdrop" id="authModalBackdrop" aria-hidden="true">
        <div class="auth-modal" role="dialog" aria-modal="true">
            <div class="auth-modal-head">
                <div>
                    <h3 class="auth-modal-title" id="authModalTitle">Sign In</h3>
                    <p class="auth-modal-sub" id="authModalSub">Access your saved templates and order history.</p>
                </div>
                <button type="button" class="auth-modal-close" id="authModalClose" aria-label="Close">×</button>
            </div>
            <div class="auth-modal-error" id="authModalError"></div>
            <!-- Login form -->
            <form id="authLoginForm" autocomplete="on">
                <div class="field">
                    <label for="authLoginEmail">Email</label>
                    <input id="authLoginEmail" type="email" placeholder="jane@company.com" autocomplete="email"
                        required />
                </div>
                <div class="field">
                    <label for="authLoginPassword">Password</label>
                    <input id="authLoginPassword" type="password" placeholder="••••••••" autocomplete="current-password"
                        required />
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%; padding:12px;">Sign In</button>
                <div id="authLoginLoading" class="auth-loading-row hidden">
                    <div class="auth-spinner"></div><span>Signing in…</span>
                </div>
            </form>
            <!-- Register form -->
            <form id="authRegisterForm" class="hidden" autocomplete="on">
                <div class="field-grid">
                    <div class="field">
                        <label for="authRegFirstName">First name</label>
                        <input id="authRegFirstName" type="text" placeholder="Jane" autocomplete="given-name"
                            required />
                    </div>
                    <div class="field">
                        <label for="authRegLastName">Last name</label>
                        <input id="authRegLastName" type="text" placeholder="Smith" autocomplete="family-name"
                            required />
                    </div>
                </div>
                <div class="field">
                    <label for="authRegEmail">Email</label>
                    <input id="authRegEmail" type="email" placeholder="jane@company.com" autocomplete="email"
                        required />
                </div>
                <div class="field">
                    <label for="authRegPassword">Password <span style="font-weight:400; color:var(--muted);">(min. 8
                            characters)</span></label>
                    <input id="authRegPassword" type="password" placeholder="Choose a password"
                        autocomplete="new-password" required minlength="8" />
                </div>
                <div class="field">
                    <label for="authRegCompany">Company <span
                            style="font-weight:400; color:var(--muted);">(optional)</span></label>
                    <input id="authRegCompany" type="text" placeholder="ABC Electric" autocomplete="organization" />
                </div>
                <button type="submit" class="btn btn-primary" style="width:100%; padding:12px;">Create
                    Account</button>
                <div id="authRegLoading" class="auth-loading-row hidden">
                    <div class="auth-spinner"></div><span>Creating account…</span>
                </div>
            </form>
            <div class="auth-modal-footer" id="authModalFooter">
                <span id="authFooterLoginMsg">Don't have an account? <a id="authSwitchToRegister">Create
                        one</a></span>
                <span id="authFooterRegisterMsg" class="hidden">Already have an account? <a id="authSwitchToLogin">Sign
                        in</a></span>
            </div>
        </div>
    </div>

    <!-- ══ ACCOUNT PANEL MODAL ══ -->
    <div class="account-modal-backdrop" id="accountModalBackdrop" aria-hidden="true">
        <div class="account-modal" role="dialog" aria-modal="true">
            <div class="account-modal-head">
                <h3 class="account-modal-title">My Account</h3>
                <button type="button" class="auth-modal-close" id="accountModalClose" aria-label="Close">×</button>
            </div>
            <div class="account-tabs">
                <button type="button" class="account-tab active" data-panel="templates">Saved Templates</button>
                <button type="button" class="account-tab" data-panel="addresses">Addresses</button>
                <button type="button" class="account-tab" data-panel="drafts">Drafts</button>
                <button type="button" class="account-tab" data-panel="orders">Order History</button>
            </div>

            <!-- Templates panel -->
            <div class="account-panel active" id="panelTemplates">
                <div
                    style="display:flex; justify-content:space-between; align-items:center; gap:12px; margin-bottom:14px; flex-wrap:wrap;">
                    <p style="font-size:13px; color:var(--muted); margin:0;">Load a saved configuration into the form.
                    </p>
                    <div class="save-template-row">
                        <input type="text" class="save-template-input" id="saveTemplateName"
                            placeholder="Template name…" maxlength="60" />
                        <button type="button" class="account-action-btn" id="saveTemplateBtn">Save current</button>
                    </div>
                </div>
                <div class="account-list" id="templateList">
                    <div class="account-empty">
                        <div class="account-empty-icon">📋</div>No saved templates yet.<br>Fill out the form and save
                        it as a template to reuse later.
                    </div>
                </div>
            </div>

            <!-- Addresses panel -->
            <div class="account-panel" id="panelAddresses">
                <div
                    style="display:flex; justify-content:space-between; align-items:center; gap:12px; margin-bottom:14px; flex-wrap:wrap;">
                    <p style="font-size:13px; color:var(--muted); margin:0;">Save delivery locations with a nickname —
                        select them when placing an order.</p>
                    <button type="button" class="account-action-btn" id="addAddressBtn">+ Add address</button>
                </div>
                <!-- Add/Edit address form (hidden by default) -->
                <div id="addressFormWrap" class="hidden"
                    style="border:1px solid #efcfcf; border-radius:12px; background:#fff8f8; padding:16px; margin-bottom:14px; display:grid; gap:10px;">
                    <p style="font-size:13px; font-weight:700; color:var(--brand); margin:0;" id="addressFormTitle">
                        New address</p>
                    <div class="field" style="max-width:320px;">
                        <label for="addrNickname">Nickname</label>
                        <input id="addrNickname" type="text" placeholder="e.g. Phoenix Office" maxlength="60" />
                    </div>
                    <div class="field-grid">
                        <div class="field" style="grid-column:1/-1;">
                            <label for="addrStreet">Street address</label>
                            <input id="addrStreet" type="text" placeholder="123 Main St" />
                        </div>
                        <div class="field">
                            <label for="addrCity">City</label>
                            <input id="addrCity" type="text" placeholder="Phoenix" />
                        </div>
                        <div class="field">
                            <label for="addrState">State</label>
                            <input id="addrState" type="text" placeholder="AZ" maxlength="2"
                                style="text-transform:uppercase;" />
                        </div>
                        <div class="field">
                            <label for="addrZip">Zip</label>
                            <input id="addrZip" type="text" placeholder="85001" maxlength="10" inputmode="numeric" />
                        </div>
                        <div class="field">
                            <label for="addrContact">Contact name <span
                                    style="font-weight:400;color:var(--muted);">(optional)</span></label>
                            <input id="addrContact" type="text" placeholder="Site manager name" />
                        </div>
                        <div class="field">
                            <label for="addrPhone">Phone <span
                                    style="font-weight:400;color:var(--muted);">(optional)</span></label>
                            <input id="addrPhone" type="tel" placeholder="(555) 555-5555" />
                        </div>
                    </div>
                    <div style="display:flex; gap:8px; flex-wrap:wrap;">
                        <button type="button" class="btn btn-primary btn-small" id="saveAddressBtn">Save
                            address</button>
                        <button type="button" class="btn btn-secondary btn-small" id="cancelAddressBtn">Cancel</button>
                    </div>
                </div>
                <div class="account-list" id="addressList">
                    <div class="account-empty">
                        <div class="account-empty-icon">📍</div>No saved addresses yet.<br>Add delivery locations to
                        quickly fill in shipping details when ordering.
                    </div>
                </div>
            </div>

            <!-- Drafts panel -->
            <div class="account-panel" id="panelDrafts">
                <p style="font-size:13px; color:var(--muted); margin:0 0 14px;">Drafts are auto-saved every 30 seconds
                    while you're working.</p>
                <div class="account-list" id="draftList">
                    <div class="account-empty">
                        <div class="account-empty-icon">📝</div>No drafts saved yet.<br>Start building a quote and it
                        will be auto-saved here.
                    </div>
                </div>
            </div>

            <!-- Order history panel -->
            <div class="account-panel" id="panelOrders">
                <p style="font-size:13px; color:var(--muted); margin:0 0 14px;">Your submitted orders. Click Reorder to
                    load a past job back into the form.</p>
                <div class="account-list" id="orderHistoryList">
                    <div class="account-empty">
                        <div class="account-empty-icon">📦</div>No orders yet.<br>Your submitted orders will appear
                        here.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ══ QUOTE MODAL ══ -->
    <div class="quote-modal-backdrop" id="quoteModalBackdrop" aria-hidden="true">
        <div class="quote-modal" role="dialog" aria-modal="true" aria-labelledby="quoteModalTitle">
            <div class="quote-modal-head">
                <div>
                    <h3 class="quote-modal-title" id="quoteModalTitle">Your Instant Quote</h3>
                    <p class="helper-text">Review your quote summary before continuing to order.</p>
                    <p id="quoteModalJobName"
                        style="display:none; font-size:13px; font-weight:700; color:var(--brand); margin:4px 0 0;"></p>
                </div>
                <button type="button" class="quote-modal-close" id="quoteModalClose" aria-label="Close">×</button>
            </div>
            <div class="quote-modal-grid">
                <div class="quote-modal-card">
                    <p class="summary-section-title">Quote summary</p>
                    <div class="quote-lines" id="quoteModalSummary"></div>
                    <div class="quote-minimum-note hidden" id="quoteModalMinimumNote">Minimum order applied ($25)
                    </div>
                </div>
                <div class="quote-modal-card">
                    <p class="summary-section-title">Estimated total</p>
                    <p class="quote-total" id="quoteModalTotal">$0.00</p>
                    <p class="helper-text" id="quoteModalLeadTime">Product total only</p>
                </div>
            </div>
            <div class="quote-modal-card">
                <p class="summary-section-title">Items</p>
                <div class="quote-items" id="quoteModalItems"></div>
            </div>
            <div class="quote-modal-actions">
                <div class="quote-actions-top">
                    <button type="button" class="btn btn-secondary-light" id="downloadQuoteBtn">Download
                        Quote</button>
                    <button type="button" class="btn btn-secondary-light" id="emailQuoteBtn">Email a Copy</button>
                </div>
                <div class="quote-actions-bottom">
                    <button type="button" class="btn btn-ghost" id="quoteModalCancel">Keep editing</button>
                    <button type="button" class="btn btn-primary btn-primary-strong" id="quoteModalContinue">Continue to
                        Order</button>
                </div>
            </div>
            <div id="emailQuoteInline" class="hidden" style="margin-top:12px; display:flex; gap:8px;">
                <input type="email" id="quoteEmailInput" placeholder="Enter email"
                    style="flex:1; padding:10px; border:1px solid #ddd; border-radius:10px;" />
                <button type="button" class="btn btn-primary" id="sendQuoteEmailBtn">Send</button>
            </div>
        </div>
    </div>

    <!-- ══ ORDER MODAL ══ -->
    <div class="quote-modal-backdrop" id="orderModalBackdrop" aria-hidden="true">
        <div class="quote-modal" role="dialog" aria-modal="true" aria-labelledby="orderModalTitle">
            <div class="quote-modal-head">
                <div>
                    <h3 class="quote-modal-title" id="orderModalTitle">Review &amp; Place Order</h3>
                    <p class="helper-text">Confirm your order details before placing.</p>
                </div>
                <button type="button" class="quote-modal-close" id="orderModalClose" aria-label="Close">×</button>
            </div>
            <div id="orderInfoStep">
                <div class="quote-modal-card">
                    <p class="summary-section-title">Order summary</p>
                    <div id="orderSummaryBlock"></div>
                </div>
                <div class="quote-modal-card">
                    <p class="summary-section-title">Contact information</p>
                    <div class="field-grid">
                        <div class="field"><label>Name</label><input id="orderName" /></div>
                        <div class="field"><label>Company</label><input id="orderCompany" /></div>
                        <div class="field"><label>Email</label><input id="orderEmail" /></div>
                        <div class="field"><label>Phone</label><input id="orderPhone" /></div>
                    </div>
                </div>
                <div class="quote-modal-card">
                    <div
                        style="display:flex; justify-content:space-between; align-items:center; gap:12px; margin-bottom:10px; flex-wrap:wrap;">
                        <p class="summary-section-title" style="margin:0;">Shipping address</p>
                        <div id="savedAddressPickerWrap" class="hidden"
                            style="display:flex; gap:8px; align-items:center;">
                            <select id="savedAddressPicker"
                                style="border:1px solid var(--line); border-radius:8px; padding:5px 8px; font-size:12px; font-family:inherit; color:var(--ink); background:#fff;">
                                <option value="">— Use a saved address —</option>
                            </select>
                        </div>
                    </div>
                    <div class="field-grid">
                        <div class="field"><label>Address</label><input id="orderAddress" /></div>
                        <div class="field"><label>City</label><input id="orderCity" /></div>
                        <div class="field"><label>State</label><input id="orderState" /></div>
                        <div class="field"><label>Zip</label><input id="orderZip" /></div>
                    </div>
                    <div style="margin-top:8px;">
                        <!-- Smart save-address nudge — shown automatically when address is complete and not already saved -->
                        <div id="saveAddressNudge" class="hidden"
                            style="display:none; margin-top:8px; padding:10px 14px; background:#fdf6f0; border:1px solid #e8c4a0; border-radius:10px; display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap;">
                            <div style="display:flex; align-items:center; gap:10px; min-width:0;">
                                <svg width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="#b87333"
                                    stroke-width="1.6" style="flex-shrink:0;">
                                    <path d="M10 2C7.239 2 5 4.239 5 7c0 4 5 10 5 10s5-6 5-10c0-2.761-2.239-5-5-5z" />
                                    <circle cx="10" cy="7" r="1.5" />
                                </svg>
                                <span style="font-size:13px; color:#7a4a1e; line-height:1.4;">Want to save this address
                                    for future orders?</span>
                            </div>
                            <div style="display:flex; gap:8px; flex-shrink:0;">
                                <button type="button" id="nudgeSaveAddressBtn"
                                    style="background:var(--accent); color:#fff; border:none; border-radius:8px; padding:6px 14px; font-size:12px; font-weight:700; cursor:pointer; font-family:inherit; white-space:nowrap;">Save
                                    address</button>
                                <button type="button" id="nudgeDismissAddressBtn"
                                    style="background:transparent; border:none; color:#d4a574; font-size:18px; line-height:1; cursor:pointer; padding:0 2px;"
                                    aria-label="Dismiss">&times;</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="quote-modal-card">
                    <p class="summary-section-title">Billing address</p>
                    <label class="line-inline-bold" style="font-size:13px; margin-bottom:10px;">
                        <input type="checkbox" id="billingSameAsShipping" checked /> Same as shipping
                    </label>
                    <div class="field-grid hidden" id="billingAddressFields">
                        <!-- Saved address picker for billing — inside fields so it hides with same-as-shipping -->
                        <div id="savedBillingAddressPickerWrap" class="hidden"
                            style="display:none; grid-column:1/-1; margin-bottom:4px;">
                            <select id="savedBillingAddressPicker"
                                style="border:1px solid var(--line); border-radius:8px; padding:5px 8px; font-size:12px; font-family:inherit; color:var(--ink); background:#fff; width:100%;">
                                <option value="">— Use a saved address —</option>
                            </select>
                        </div>
                        <div class="field"><label>Address</label><input id="billingAddress" /></div>
                        <div class="field"><label>City</label><input id="billingCity" /></div>
                        <div class="field"><label>State</label><input id="billingState" /></div>
                        <div class="field"><label>Zip</label><input id="billingZip" /></div>
                        <!-- Save billing address nudge -->
                        <div id="saveBillingAddressNudge" class="hidden"
                            style="display:none; grid-column:1/-1; margin-top:4px; padding:10px 14px; background:#fdf6f0; border:1px solid #e8c4a0; border-radius:10px; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap;">
                            <div style="display:flex; align-items:center; gap:10px; min-width:0;">
                                <svg width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="#b87333"
                                    stroke-width="1.6" style="flex-shrink:0;">
                                    <path d="M10 2C7.239 2 5 4.239 5 7c0 4 5 10 5 10s5-6 5-10c0-2.761-2.239-5-5-5z" />
                                    <circle cx="10" cy="7" r="1.5" />
                                </svg>
                                <span style="font-size:13px; color:#7a4a1e; line-height:1.4;">Want to save this billing
                                    address for future orders?</span>
                            </div>
                            <div style="display:flex; gap:8px; flex-shrink:0;">
                                <button type="button" id="nudgeSaveBillingAddressBtn"
                                    style="background:var(--accent); color:#fff; border:none; border-radius:8px; padding:6px 14px; font-size:12px; font-weight:700; cursor:pointer; font-family:inherit; white-space:nowrap;">Save
                                    address</button>
                                <button type="button" id="nudgeDismissBillingAddressBtn"
                                    style="background:transparent; border:none; color:#d4a574; font-size:18px; line-height:1; cursor:pointer; padding:0 2px;"
                                    aria-label="Dismiss">&times;</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="quote-modal-card">
                    <div
                        style="display:flex; justify-content:space-between; align-items:center; gap:12px; flex-wrap:wrap;">
                        <p class="summary-section-title" style="margin:0;">Shipping method</p>
                        <select id="orderShipping"
                            style="border:1px solid var(--line); border-radius:8px; padding:5px 8px; font-size:12px; font-family:inherit; color:var(--ink); background:#fff;">
                            <option value="pickup">Pickup (Free)</option>
                            <option value="ground" selected>UPS Ground ($15 — Free on orders over $100)</option>
                            <option value="2day">UPS 2-Day ($30)</option>
                            <option value="overnight">Overnight ($75)</option>
                        </select>
                    </div>
                </div>
                <div class="quote-modal-card">
                    <p class="summary-section-title">Payment information</p>
                    <div class="field-grid">
                        <div class="field"><label>Cardholder name</label><input id="paymentCardholder" /></div>
                        <div class="field"><label>Card number</label><input id="paymentCardNumber" inputmode="numeric"
                                autocomplete="cc-number" /></div>
                        <div class="field"><label>Expiration</label><input id="paymentExpiry" placeholder="MM/YY"
                                autocomplete="cc-exp" /></div>
                        <div class="field"><label>CVV</label><input id="paymentCvv" inputmode="numeric"
                                autocomplete="cc-csc" /></div>
                        <div class="field"><label>Billing zip</label><input id="paymentBillingZip" inputmode="numeric"
                                autocomplete="postal-code" /></div>
                    </div>
                </div>
                <div class="quote-modal-card">
                    <p class="summary-section-title">Final total</p>
                    <div id="orderTotals"></div>
                    <div class="validation-message" id="orderValidationMessage"></div>
                </div>
                <div class="quote-modal-actions">
                    <div class="quote-actions-bottom">
                        <button type="button" class="btn btn-link-lite" id="orderBackToQuote">Back to Quote</button>
                        <button type="button" class="btn btn-primary btn-primary-strong"
                            id="continueToProofBtn">Continue to Proof</button>
                    </div>
                </div>
            </div>

            <div id="proofReviewStep" class="hidden">
                <div class="quote-modal-card">
                    <div class="proof-toolbar">
                        <div>
                            <p class="summary-section-title">Proof Review</p>
                            <p class="helper-text" style="margin:0;">Review your production proof before approving.
                            </p>
                        </div>
                        <div style="display:flex; gap:10px; align-items:center; flex-wrap:wrap;">
                            <div class="proof-zoom-wrap">
                                <span>Zoom</span>
                                <input type="range" id="proofZoomRange" min="60" max="300" step="10" value="150" />
                                <span id="proofZoomValue">150%</span>
                            </div>
                            <button type="button" class="btn btn-secondary-light" id="downloadProofBtn">Download
                                Proof</button>
                        </div>
                    </div>
                    <div class="proof-sheet-wrap">
                        <div class="proof-sheet-list" id="proofSheetContainer"></div>
                    </div>
                    <div id="proofSummaryBlock" style="margin-top:12px;"></div>
                </div>
                <div class="quote-modal-card">
                    <label class="line-inline-bold" style="font-size:14px;">
                        <input type="checkbox" id="proofApprovalCheckbox" /> I approve this proof for production.
                    </label>
                    <div class="validation-message" id="proofValidationMessage"></div>
                </div>
                <div class="quote-modal-actions">
                    <div class="quote-actions-bottom">
                        <button type="button" class="btn btn-link-lite" id="backToOrderInfoBtn">Back to Order
                            Info</button>
                        <button type="button" class="btn btn-primary btn-primary-strong" id="placeOrderBtn"
                            disabled>Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ══ LOADING ══ -->
    <div class="quote-loading-backdrop" id="quoteLoadingBackdrop" aria-hidden="true">
        <div class="quote-loading-card" role="status" aria-live="polite">
            <div class="quote-loading-spinner" aria-hidden="true"></div>
            <div>
                <h3 class="quote-modal-title" style="font-size:22px; margin-bottom:6px;">Generating your quote…</h3>
                <p class="helper-text">Please hold for a moment.</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const NEWLINE = '\n';
            const SVG_NS = 'http://www.w3.org/2000/svg';
            const PRICING = {
                minimumOrder: 25,
                shippingRates: {
                    pickup: 0,
                    ground: 15,
                    '2day': 30,
                    overnight: 75
                },
                squareInchRate: 0.75
            };
            const BASELINE_LINE_SIZE_IN = 0.25;
            const PORTAL_TAG_PX_PER_IN = 307;
            const PORTAL_FONT_PX_PER_IN = 345;

            const form = document.getElementById('quoteForm');
            const signStack = document.getElementById('signStack');
            const addSignBtn = document.getElementById('addSignBtn');
            const resetBtn = document.getElementById('resetBtn');
            const previewSignSelect = document.getElementById('previewSignSelect');
            const designPreviewSvg = document.getElementById('designPreviewSvg');
            const designPreviewMeta = document.getElementById('designPreviewMeta');
            const previewWarning = document.getElementById('previewWarning');
            const sameSizeMode = document.getElementById('sameSizeMode');
            const globalSizeWrap = document.getElementById('globalSizeWrap');
            const globalWidthLabel = document.getElementById('globalWidthLabel');
            const globalHeightLabel = document.getElementById('globalHeightLabel');
            const globalHeightField = document.getElementById('globalHeightField');
            const lineCountInput = document.getElementById('lineCount');
            const quoteModalBackdrop = document.getElementById('quoteModalBackdrop');
            const quoteModalClose = document.getElementById('quoteModalClose');
            const quoteModalCancel = document.getElementById('quoteModalCancel');
            const quoteModalContinue = document.getElementById('quoteModalContinue');
            const quoteModalSummary = document.getElementById('quoteModalSummary');
            const quoteModalItems = document.getElementById('quoteModalItems');
            const quoteModalTotal = document.getElementById('quoteModalTotal');
            const quoteModalLeadTime = document.getElementById('quoteModalLeadTime');
            const quoteModalMinimumNote = document.getElementById('quoteModalMinimumNote');
            const downloadQuoteBtn = document.getElementById('downloadQuoteBtn');
            const emailQuoteBtn = document.getElementById('emailQuoteBtn');
            const emailInline = document.getElementById('emailQuoteInline');
            const sendQuoteEmailBtn = document.getElementById('sendQuoteEmailBtn');
            const quoteEmailInput = document.getElementById('quoteEmailInput');
            const quoteLoadingBackdrop = document.getElementById('quoteLoadingBackdrop');
            const generateBtn = document.getElementById('generateBtn');

            let selectedPreviewIndex = 0;
            let updateQueued = false;
            let latestQuotePayload = null;
            let quoteLoadingTimer = null;
            let savedTemplatesCache = [];
            let savedAddressesCache = [];
            let editingAddressId = null;
            let savedDraftsCache = [];
            let draftSaveTimer = null;
            let draftAutoSaveInterval = null;
            let savedOrdersCache = [];

            function getEl(id) {
                return document.getElementById(id);
            }

            function setText(id, value) {
                const el = getEl(id);
                if (el) el.textContent = value;
            }

            function toggleHidden(el, hidden) {
                if (!el) return;
                el.classList.toggle('hidden', hidden);
            }

            function currency(value) {
                return new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    currency: 'USD'
                }).format(Number(value || 0));
            }

            function normalizeNewlines(text) {
                return String(text || '').replace(/\r\n/g, NEWLINE).replace(/\r/g, NEWLINE);
            }

            function splitLines(text) {
                return normalizeNewlines(text).split(NEWLINE).map(l => l.trim());
            }

            function countCharacters(text) {
                return String(text || '').replace(/\s/g, '').length;
            }

            function esc(text) {
                return String(text || '').replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
                    .replace(/"/g, '&quot;').replace(/'/g, '&#39;');
            }

            function createSvgEl(tag, attrs = {}) {
                const el = document.createElementNS(SVG_NS, tag);
                Object.entries(attrs).forEach(([k, v]) => el.setAttribute(k, String(v)));
                return el;
            }

            function parseSizeValueToInches(value) {
                const raw = String(value || '').trim().toLowerCase().replace(/"/g, '');
                if (!raw || raw === 'auto' || raw === 'custom') return null;
                if (raw.includes('/')) {
                    const [t, b] = raw.split('/');
                    const top = Number(t),
                        bot = Number(b);
                    if (Number.isFinite(top) && Number.isFinite(bot) && bot !== 0) return top / bot;
                }
                const numeric = Number(raw);
                if (Number.isFinite(numeric) && numeric > 0) return numeric;
                return null;
            }

            function roundToNearestSixteenth(v) {
                return Math.round(v * 16) / 16;
            }

            function roundToThreeDecimals(v) {
                return Math.round(Number(v || 0) * 1000) / 1000;
            }

            function formatThreeDecimals(v) {
                return roundToThreeDecimals(v).toFixed(3);
            }

            function roundUpToIncrement(v, inc = 1 / 16) {
                if (!Number.isFinite(v) || v <= 0) return inc;
                return Math.ceil(v / inc) * inc;
            }

            function colorLabel(value) {
                const labels = {
                    black_white: 'Black / White',
                    white_black: 'White / Black',
                    white_red: 'White / Red',
                    yellow_black: 'Yellow / Black',
                    yellow_red: 'Yellow / Red',
                    red_white: 'Red / White',
                    green_white: 'Green / White',
                    blue_white: 'Blue / White',
                    gray_white: 'Grey / White',
                    brown_white: 'Brown / White',
                    orange_white: 'Orange / White',
                    orange_black: 'Orange / Black',
                    purple_white: 'Purple / White'
                };
                return labels[value] || 'Black / White';
            }

            function colorPair(value) {
                const map = {
                    black_white: ['#000000', '#ffffff'],
                    white_black: ['#ffffff', '#000000'],
                    white_red: ['#ffffff', '#ef1111'],
                    yellow_black: ['#F5E800', '#000000'],
                    yellow_red: ['#F5E800', '#ef1111'],
                    red_white: ['#ef1111', '#ffffff'],
                    green_white: ['#0b8f10', '#ffffff'],
                    blue_white: ['#004F86', '#ffffff'],
                    gray_white: ['#4F565B', '#ffffff'],
                    brown_white: ['#523D2A', '#ffffff'],
                    orange_white: ['#B84717', '#ffffff'],
                    orange_black: ['#D24912', '#000000'],
                    purple_white: ['#5b34b1', '#ffffff']
                };
                return map[value] || ['#000000', '#ffffff'];
            }

            function materialLabel() {
                return 'Laser-engraved plastic';
            }

            function fontLabel(value) {
                const labels = {
                    'Arial, Helvetica, sans-serif': 'Arial',
                    "'MS Gothic', monospace": 'MS Gothic',
                    "'Switzerland Condensed', 'Arial Narrow', Arial, sans-serif": 'Switzerland Condensed'
                };
                return labels[value] || 'Arial';
            }

            function getFontWidthFactor(fontFamily) {
                if (fontFamily === "'Switzerland Condensed', 'Arial Narrow', Arial, sans-serif") return 0.9;
                if (fontFamily === "'MS Gothic', monospace") return 0.95;
                return 0.9;
            }

            function measureSvgTextWidth(svg, text, fontSize, fontFamily, fontWeight, letterSpacingPx) {
                const probe = createSvgEl('text', {
                    x: -9999,
                    y: -9999,
                    'font-size': fontSize,
                    'font-family': fontFamily,
                    'font-weight': fontWeight,
                    'letter-spacing': String(letterSpacingPx || 0) + 'px',
                    visibility: 'hidden'
                });
                probe.textContent = text || ' ';
                svg.appendChild(probe);
                let width = 0;
                try {
                    width = probe.getComputedTextLength();
                } catch (_) {
                    width = (String(text || '').length || 1) * fontSize * 0.55;
                }
                probe.remove();
                return width;
            }

            function measureReferenceXMetrics(svg, fontSize, fontFamily, fontWeight) {
                const probe = createSvgEl('text', {
                    x: -9999,
                    y: -9999,
                    'font-size': fontSize,
                    'font-family': fontFamily,
                    'font-weight': fontWeight,
                    visibility: 'hidden'
                });
                probe.textContent = 'X';
                svg.appendChild(probe);
                let metrics = {
                    height: fontSize * 0.7,
                    ascent: fontSize * 0.7
                };
                try {
                    const box = probe.getBBox();
                    metrics = {
                        height: box.height || fontSize * 0.7,
                        ascent: (-box.y) || (box.height || fontSize * 0.7)
                    };
                } catch (_) { }
                probe.remove();
                return metrics;
            }

            function measureReferenceXHeightInches(fontInches, fontFamily, isBold) {
                const mfpx = 240;
                const metrics = measureReferenceXMetrics(designPreviewSvg, mfpx, fontFamily ||
                    'Arial, Helvetica, sans-serif', isBold ? 700 : 400);
                return roundToThreeDecimals(metrics.height * (fontInches / mfpx));
            }

            function getLeadTime() {
                return '24-48hrs';
            }

            function getLineSpacingMultiplier(value) {
                if (value === 'tight') return 0.25;
                if (value === 'half') return 0.5;
                if (value === 'double') return 2;
                return 1;
            }

            function getDefaultLineStyle() {
                return {
                    bold: false,
                    size: '1/4',
                    customSize: ''
                };
            }

            function getEffectiveLineSizeValue(style) {
                if (!style) return '1/4';
                if (style.size === 'custom') return style.customSize || '';
                return style.size || '1/4';
            }

            function getStoredLineStyles(entry) {
                try {
                    return JSON.parse(entry.dataset.lineStyles || '[]');
                } catch (_) {
                    return [];
                }
            }

            function setStoredLineStyles(entry, styles) {
                entry.dataset.lineStyles = JSON.stringify(styles || []);
            }

            function getLineStylesForEntry(entry) {
                const stored = getStoredLineStyles(entry);
                const rows = Array.from(entry.querySelectorAll('.line-inline-row'));
                if (!rows.length) return stored;
                return rows.map((row, index) => {
                    const sizeSelect = row.querySelector('.line-inline-size');
                    const customInput = row.querySelector('.line-inline-custom');
                    const boldInput = row.querySelector('.line-inline-bold-input');
                    return {
                        ...getDefaultLineStyle(),
                        ...(stored[index] || {}),
                        size: sizeSelect ? sizeSelect.value : (stored[index]?.size || '1/4'),
                        customSize: customInput ? customInput.value.trim() : (stored[index]?.customSize || ''),
                        bold: boldInput ? Boolean(boldInput.checked) : Boolean(stored[index]?.bold)
                    };
                });
            }

            function measureTextWidthInches(text, fontInches, fontFamily, isBold, condenseRatio) {
                const sampleText = String(text || '').trim();
                if (!sampleText) return 0;
                const mfpx = 240;
                const measuredPx = measureSvgTextWidth(designPreviewSvg, sampleText, mfpx, fontFamily ||
                    'Arial, Helvetica, sans-serif', isBold ? 700 : 400, 0) * getFontWidthFactor(fontFamily ||
                        'Arial, Helvetica, sans-serif');
                return roundToThreeDecimals(measuredPx * (fontInches / mfpx) * (Number.isFinite(condenseRatio) ?
                    condenseRatio : 1));
            }

            function getAutoHoleDiameter(w, h) {
                const s = Math.min(w, h);
                if (s <= 1.5) return 0.125;
                if (s <= 4) return 0.1875;
                if (s <= 8) return 0.25;
                return 0.5;
            }

            function getSelectedHoleSpec(holeQuantity, holeSizeValue, tagWidth, tagHeight) {
                if (!holeQuantity || holeQuantity === 'No holes') return null;
                if (holeQuantity === 'Cable tie slots') return {
                    type: 'slot',
                    width: 0.250,
                    height: 0.188
                };
                const sizeMap = {
                    '1/8': 0.125,
                    '3/16': 0.188,
                    '1/4': 0.250
                };
                const diameter = sizeMap[holeSizeValue] || getAutoHoleDiameter(tagWidth, tagHeight);
                return {
                    type: 'round',
                    diameter
                };
            }

            function getHoleCenterOffset(d) {
                return d > 0 ? roundToThreeDecimals(d * 1.5) : 0;
            }

            function getNoHoleMargins(w, h) {
                const h2 = roundToThreeDecimals(roundToNearestSixteenth(w * 0.065));
                const v = roundToThreeDecimals(Math.min(h2, h * 0.15));
                return {
                    left: h2,
                    right: h2,
                    top: v,
                    bottom: v
                };
            }

            function getHoleSafeMargins(holeQuantity, holeSizeValue, tagWidth, tagHeight) {
                const base = getNoHoleMargins(tagWidth, tagHeight);
                const spec = getSelectedHoleSpec(holeQuantity, holeSizeValue, tagWidth, tagHeight);
                if (!spec) return base;
                const sideMargin = roundToThreeDecimals(spec.type === 'slot' ? spec.height * 3 : spec.diameter * 3);
                if (holeQuantity === '1 hole left') return {
                    left: sideMargin,
                    right: base.right,
                    top: base.top,
                    bottom: base.bottom
                };
                if (holeQuantity === '1 hole right') return {
                    left: base.left,
                    right: sideMargin,
                    top: base.top,
                    bottom: base.bottom
                };
                if (holeQuantity === '2 holes' || holeQuantity === 'Cable tie slots') return {
                    left: sideMargin,
                    right: sideMargin,
                    top: base.top,
                    bottom: base.bottom
                };
                if (holeQuantity === '4 holes' || holeQuantity === '6 holes') return {
                    left: sideMargin,
                    right: sideMargin,
                    top: sideMargin,
                    bottom: sideMargin
                };
                return base;
            }

            function getHolePlacementPoints(holeQuantity, tagWidth, tagHeight, centerOffset) {
                const lx = centerOffset,
                    rx = tagWidth - centerOffset,
                    cy = tagHeight / 2,
                    ty = centerOffset,
                    by = tagHeight - centerOffset;
                if (holeQuantity === '1 hole left') return [{
                    x: lx,
                    y: cy
                }];
                if (holeQuantity === '1 hole right') return [{
                    x: rx,
                    y: cy
                }];
                if (holeQuantity === '2 holes' || holeQuantity === 'Cable tie slots') return [{
                    x: lx,
                    y: cy
                }, {
                    x: rx,
                    y: cy
                }];
                if (holeQuantity === '4 holes') return [{
                    x: lx,
                    y: ty
                }, {
                    x: rx,
                    y: ty
                }, {
                    x: lx,
                    y: by
                }, {
                    x: rx,
                    y: by
                }];
                if (holeQuantity === '6 holes') return [{
                    x: lx,
                    y: ty
                }, {
                    x: rx,
                    y: ty
                }, {
                    x: lx,
                    y: by
                }, {
                    x: rx,
                    y: by
                }, {
                    x: lx,
                    y: cy
                }, {
                    x: rx,
                    y: cy
                }];
                return [];
            }

            function inchesToPx(value, scale) {
                return value * scale;
            }

            function renderHoleFeatures(svgGroup, holeQuantity, holeSizeValue, tagWidth, tagHeight, offsetX, offsetY, scale,
                textColor = '#000000') {
                const spec = getSelectedHoleSpec(holeQuantity, holeSizeValue, tagWidth, tagHeight);
                if (!spec) return;
                if (spec.type === 'round') {
                    const co = getHoleCenterOffset(spec.diameter);
                    getHolePlacementPoints(holeQuantity, tagWidth, tagHeight, co).forEach(pt => {
                        svgGroup.appendChild(createSvgEl('circle', {
                            cx: offsetX + inchesToPx(pt.x, scale),
                            cy: offsetY + inchesToPx(pt.y, scale),
                            r: inchesToPx(spec.diameter / 2, scale),
                            fill: '#ffffff',
                            stroke: textColor,
                            'stroke-width': 1.25
                        }));
                    });
                    return;
                }
                const co = getHoleCenterOffset(spec.height);
                getHolePlacementPoints('Cable tie slots', tagWidth, tagHeight, co).forEach(pt => {
                    svgGroup.appendChild(createSvgEl('rect', {
                        x: offsetX + inchesToPx(pt.x - spec.width / 2, scale),
                        y: offsetY + inchesToPx(pt.y - spec.height / 2, scale),
                        width: inchesToPx(spec.width, scale),
                        height: inchesToPx(spec.height, scale),
                        rx: inchesToPx(spec.height / 2, scale),
                        ry: inchesToPx(spec.height / 2, scale),
                        fill: '#ffffff',
                        stroke: textColor,
                        'stroke-width': 1.25
                    }));
                });
            }

            function getTagGeometry({
                tagWidth,
                tagHeight,
                hasHoles = false,
                holeDiameter = 0,
                holeQuantity = 'No holes',
                holeSizeValue = ''
            }) {
                const baseMargins = getNoHoleMargins(tagWidth, tagHeight);
                const selectedMargins = hasHoles ? getHoleSafeMargins(holeQuantity, holeSizeValue, tagWidth, tagHeight) :
                    baseMargins;
                const effectiveHoleDiameter = hasHoles && holeDiameter > 0 ? holeDiameter : 0;
                const holeCenterOffset = hasHoles ? getHoleCenterOffset(effectiveHoleDiameter) : 0;
                return {
                    tagWidth,
                    tagHeight,
                    margins: selectedMargins,
                    holeDiameter: effectiveHoleDiameter,
                    holeCenterOffset,
                    safeArea: {
                        x: roundToThreeDecimals(selectedMargins.left),
                        y: roundToThreeDecimals(selectedMargins.top),
                        width: roundToThreeDecimals(Math.max(0, tagWidth - selectedMargins.left - selectedMargins.right)),
                        height: roundToThreeDecimals(Math.max(0, tagHeight - selectedMargins.top - selectedMargins.bottom))
                    }
                };
            }

            function getPreviewScale(pw, ph, tw, th, pad = 24) {
                return Math.min(Math.max(1, pw - pad * 2) / tw, Math.max(1, ph - pad * 2) / th);
            }

            function validateTextBounds(textBounds, safeArea) {
                const tol = 0.06;
                const oL = textBounds.x < (safeArea.x - tol),
                    oT = textBounds.y < (safeArea.y - tol),
                    oR = textBounds.x + textBounds.width > (safeArea.x + safeArea.width + tol),
                    oB = textBounds.y + textBounds.height > (safeArea.y + safeArea.height + tol);
                const oX = oL || oR,
                    oY = oT || oB;
                let message = '';
                if (oX && oY)
                    message = 'Text does not fit within the safe area. Try condensing, changing tag size, or text size.';
                else if (oX)
                    message = 'Text is too wide for the safe area. Try condensing, changing tag size, or text size.';
                else if (oY)
                    message = 'Text is too tall for the safe area. Try condensing, changing tag size, or text size.';
                return {
                    fits: !oX && !oY,
                    message
                };
            }

            function getSizeOptionsHtml(selectedValue) {
                return ['1/16', '1/8', '3/16', '1/4', '5/16', '3/8', '7/16', '1/2', '9/16', '5/8', '3/4', '7/8', '1',
                    'custom'
                ].map(o => '<option value="' + o + '"' + (selectedValue === o ? ' selected' : '') + '>' + (
                    o === 'custom' ? 'Custom' : o + '"') + '</option>').join('');
            }

            function alignIconSvg(type) {
                if (type === 'left'
                ) return '<svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="6" x2="20" y2="6"></line><line x1="4" y1="10" x2="14" y2="10"></line><line x1="4" y1="14" x2="18" y2="14"></line><line x1="4" y1="18" x2="12" y2="18"></line></svg>';
                if (type === 'right'
                ) return '<svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="6" x2="20" y2="6"></line><line x1="10" y1="10" x2="20" y2="10"></line><line x1="6" y1="14" x2="20" y2="14"></line><line x1="12" y1="18" x2="20" y2="18"></line></svg>';
                return '<svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" y1="6" x2="20" y2="6"></line><line x1="7" y1="10" x2="17" y2="10"></line><line x1="5" y1="14" x2="19" y2="14"></line><line x1="8" y1="18" x2="16" y2="18"></line></svg>';
            }

            function buildAlignControls(prefix = 'compact') {
                return '<div class="' + prefix + '-align-group">' +
                    '<button type="button" class="' + prefix + '-align-btn entry-align-btn" data-align="left" title="Align left">' +
                    alignIconSvg('left') + '</button>' +
                    '<button type="button" class="' + prefix + '-align-btn entry-align-btn" data-align="center" title="Align center">' +
                    alignIconSvg('center') + '</button>' +
                    '<button type="button" class="' + prefix + '-align-btn entry-align-btn" data-align="right" title="Align right">' +
                    alignIconSvg('right') + '</button>' +
                    '</div>';
            }

            function buildInlineLineRow(lineText, index, style, state) {
                const safeStyle = Object.assign({}, getDefaultLineStyle(), style || {});
                const isActive = Boolean(state && state.isActive),
                    isSelected = Boolean(state && state.isSelected);
                const labelText = lineText && lineText.length ? lineText : ('Blank line ' + (index + 1));
                return '<div class="line-inline-row' + (isActive ? ' active' : '') + (isSelected ? ' active' : '') + '" data-line-index="' + index + '"' +
                    (isSelected ? ' data-line-selected="true"' : '') + ' >' +
                    '<div class="line-inline-label">Line ' + (index + 1) + ': ' + esc(labelText) + '</div>' +
                    '<label class="line-inline-bold"><input type="checkbox" class="line-inline-bold-input"' + (safeStyle
                        .bold ? ' checked' : '') + ' />Bold</label>' +
                    '<div class="line-inline-height-wrap"><select class="line-inline-size">' + getSizeOptionsHtml(
                        safeStyle.size || '1/4') + '</select>' +
                    '<input class="line-inline-custom' + (safeStyle.size === 'custom' ? ' visible' : ' hidden') + '" type="text" value="' + esc(safeStyle.customSize || '') + '" placeholder="Custom" /></div>' +
                    '<button type="button" class="line-inline-apply-btn">Apply below</button>' +
                    '</div>';
            }

            // ── Color options helper ──
            function buildColorOptions(selectedValue) {
                const opts = [
                    ['black_white', 'Black / White'],
                    ['white_black', 'White / Black'],
                    ['white_red', 'White / Red'],
                    ['yellow_black', 'Yellow / Black'],
                    ['yellow_red', 'Yellow / Red'],
                    ['red_white', 'Red / White'],
                    ['green_white', 'Green / White'],
                    ['blue_white', 'Blue / White'],
                    ['gray_white', 'Grey / White'],
                    ['brown_white', 'Brown / White'],
                    ['orange_white', 'Orange / White'],
                    ['orange_black', 'Orange / Black'],
                    ['purple_white', 'Purple / White']
                ];
                return opts.map(([v, l]) => '<option value="' + v + '"' + (v === selectedValue ? ' selected' : '') + '>' + l +
                    '</option>').join('');
            }

            function buildHoleOptions(selectedValue) {
                const opts = ['No holes', '1 hole left', '1 hole right', '2 holes', '4 holes', '6 holes',
                    'Cable tie slots'
                ];
                return opts.map(o => '<option value="' + o + '"' + (o === selectedValue ? ' selected' : '') + '>' + o +
                    '</option>').join('');
            }

            function buildHoleSizeOptions(selectedValue, holeQty) {
                if (holeQty === 'No holes') return '<option value="N/A">N/A</option>';
                if (holeQty === 'Cable tie slots') return '<option value="3/16 x 1/4" selected>3/16 x 1/4</option>';
                return ['1/8', '3/16', '1/4'].map(o => '<option value="' + o + '"' + (o === selectedValue ? ' selected' : '') +
                    '>' + o + '</option>').join('');
            }

            // ── Build sign card (with embedded Tag Details) ──
            function buildSignCard(title, text = '', qty = 1, width = '', height = '') {
                const globalColor = getEl('globalColor') ? getEl('globalColor').value : 'black_white';
                const globalHoles = getEl('holes') ? getEl('holes').value : 'No holes';
                const globalHoleSize = getEl('holeSize') ? getEl('holeSize').value : '1/8';
                const card = document.createElement('div');
                card.className = 'sign-card sign-entry';
                card.innerHTML = ''
                    +
                    '<div class="sign-card-header">' +
                    '  <div class="sign-card-title">' + esc(title) + '</div>' +
                    '  <div class="sign-card-controls">' +
                    '    <button type="button" class="sign-icon-btn sign-duplicate-btn" title="Duplicate tag"><svg viewBox="0 0 24 24" fill="none"><rect x="9" y="9" width="10" height="10" stroke="currentColor" stroke-width="2"></rect><rect x="5" y="5" width="10" height="10" stroke="currentColor" stroke-width="2"></rect></svg></button>' +
                    '    <button type="button" class="sign-icon-btn sign-delete-btn" title="Delete tag"><svg viewBox="0 0 24 24" fill="none"><path d="M3 6h18" stroke="currentColor" stroke-width="2"></path><path d="M8 6V4h8v2" stroke="currentColor" stroke-width="2"></path><rect x="6" y="6" width="12" height="14" stroke="currentColor" stroke-width="2"></rect></svg></button>' +
                    '  </div>' +
                    '</div>' +
                    '<div class="sign-card-body">'
                    // ── Tag Details (collapsible) ──
                    +
                    '  <div class="tag-details-panel">' +
                    '    <div class="tag-details-toggle" tabindex="0" role="button" aria-expanded="false">' +
                    '      <span class="tag-details-toggle-label">Tag Details (color, holes, size)</span>' +
                    '      <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round"><polyline points="6 9 12 15 18 9"></polyline></svg>' +
                    '    </div>' +
                    '    <div class="tag-details-fields hidden">'
                    // color
                    +
                    '      <div class="field-grid-4" style="gap:8px;">' +
                    '        <div class="field"><label>Color</label><select class="tag-color-select">' +
                    buildColorOptions(globalColor) + '</select></div>' +
                    '        <div class="field"><label>Holes</label><select class="tag-holes-select">' +
                    buildHoleOptions(globalHoles) + '</select></div>' +
                    '        <div class="field"><label>Hole size</label><select class="tag-holesize-select"' + (
                        globalHoles === 'No holes' ? ' disabled' : '') + '>' + buildHoleSizeOptions(globalHoleSize,
                            globalHoles) + '</select></div>' +
                    '        <div class="field"><label>Corner radius</label><select class="tag-radius-select"><option value="no" selected>No</option><option value="yes">Yes (1/8")</option></select></div>' +
                    '      </div>' +
                    '      <div class="field-grid sign-size-row" style="max-width:370px; gap:8px; align-items:end;">' +
                    '        <div class="field sign-height-field"><label class="sign-height-label">Height (in.)</label><input class="sign-height" type="number" min="0.25" step="0.001" value="' + esc(String(height)) + '" /></div>' +
                    '        <div class="field sign-width-field"><label class="sign-width-label">Width (in.)</label><input class="sign-width" type="number" min="0.25" step="0.001" value="' + esc(String(width)) + '" /></div>' +
                    '        <button type="button" class="btn btn-secondary btn-small apply-size-below-btn" style="white-space:nowrap;">Apply size below</button>' +
                    '      </div>' +
                    '    </div>' +
                    '  </div>'
                    // ── Quantity ──
                    +
                    '  <div class="qty-row">' +
                    '    <div class="field"><label>Quantity</label><input class="sign-qty" type="number" min="1" step="1" value="' + esc(String(qty)) + '" /></div>' +
                    '    <button type="button" class="btn btn-secondary btn-small apply-qty-below-btn">Apply qty below</button>' +
                    '  </div>'
                    // ── Line spacing + align ──
                    +
                    '  <div class="sign-global-controls">' +
                    '    <select class="sign-line-spacing" style="border:1px solid var(--line); border-radius:9px; padding:6px 8px; font-size:12px; font-family:inherit;">' +
                    '      <option value="tight">Tight</option><option value="half">Half</option><option value="full" selected>Full</option><option value="double">Double</option>' +
                    '    </select>' +
                    buildAlignControls('compact') +
                    '  </div>'
                    // ── Textarea ──
                    +
                    '  <div class="text-edit-wrap"><textarea class="sign-text" placeholder="Example:&#10;MAIN DISCONNECT&#10;480V"></textarea></div>'
                    // ── Condense (moved below text per email request) ──
                    +
                    '  <div class="condense-row">' +
                    '    <label>Condense text:</label>' +
                    '    <select class="tag-condense-select"><option value="no" selected>No</option><option value="yes">Yes</option></select>' +
                    '  </div>'
                    // ── Per-line style panel ──
                    +
                    '  <div class="line-inline-panel"></div>' +
                    '</div>';
                card.querySelector('.sign-text').value = text;
                card.dataset.align = 'center';
                card.dataset.activeLineIndex = '0';
                card.dataset.colorValue = globalColor;
                card.dataset.holeQty = globalHoles;
                card.dataset.holeSize = globalHoleSize;
                card.dataset.condense = 'no';
                card.dataset.cornerRadius = 'no';
                return card;
            }

            function getLineSelectionRange(entry) {
                const textarea = entry.querySelector('.sign-text');
                const lines = splitLines(textarea ? textarea.value : '');
                const maxIndex = Math.max(lines.length - 1, 0);
                if (!textarea) return {
                    start: 0,
                    end: 0
                };
                const value = textarea.value || '',
                    ss = textarea.selectionStart || 0,
                    se = textarea.selectionEnd || 0;
                const start = Math.max(0, Math.min(value.slice(0, ss).split(NEWLINE).length - 1, maxIndex));
                const end = Math.max(0, Math.min(value.slice(0, se).split(NEWLINE).length - 1, maxIndex));
                return {
                    start: Math.min(start, end),
                    end: Math.max(start, end)
                };
            }

            function getActiveLineIndex(entry) {
                const range = getLineSelectionRange(entry);
                entry.dataset.activeLineIndex = String(range.start);
                return range.start;
            }

            function setActiveLineIndex(entry, nextIndex) {
                const textarea = entry.querySelector('.sign-text');
                const lines = splitLines(textarea ? textarea.value : '');
                const maxIndex = Math.max(lines.length - 1, 0);
                entry.dataset.activeLineIndex = String(Math.max(0, Math.min(nextIndex, maxIndex)));
            }

            function getSelectedLineIndexes(entry) {
                const range = getLineSelectionRange(entry);
                const indexes = [];
                for (let i = range.start; i <= range.end; i++) indexes.push(i);
                return indexes;
            }

            function hasMultiLineSelection(entry) {
                const range = getLineSelectionRange(entry);
                return range.end > range.start;
            }

            function getCurrentLineStyle(entry, lineIndex) {
                const current = getStoredLineStyles(entry);
                return {
                    ...getDefaultLineStyle(),
                    ...(current[lineIndex] || {})
                };
            }

            function writeLineStyle(entry, lineIndex, patch) {
                const current = getStoredLineStyles(entry);
                current[lineIndex] = {
                    ...getDefaultLineStyle(),
                    ...(current[lineIndex] || {}),
                    ...patch
                };
                setStoredLineStyles(entry, current);
            }

            function updateAlignButtons(entry) {
                const currentAlign = entry.dataset.align || 'center';
                entry.querySelectorAll('.entry-align-btn').forEach(btn => {
                    const active = btn.dataset.align === currentAlign;
                    btn.classList.toggle('active', active);
                    btn.setAttribute('aria-pressed', active ? 'true' : 'false');
                });
            }

            function syncLineStyleEditor(entry) {
                const textarea = entry.querySelector('.sign-text');
                if (!textarea) return;
                const lines = splitLines(textarea.value);
                const existing = getLineStylesForEntry(entry);
                const nextStyles = lines.map((line, index) => ({
                    ...getDefaultLineStyle(),
                    ...(existing[index] || {})
                }));
                setStoredLineStyles(entry, nextStyles);
                const activeIndex = getActiveLineIndex(entry);
                const selectedIndexes = new Set(getSelectedLineIndexes(entry));
                const inlinePanel = entry.querySelector('.line-inline-panel');
                updateAlignButtons(entry);
                if (inlinePanel) {
                    inlinePanel.innerHTML = nextStyles.map((style, index) => buildInlineLineRow(lines[index] || '', index,
                        style, {
                        isActive: index === activeIndex,
                        isSelected: selectedIndexes.has(index)
                    })).join('');
                }
            }

            function syncTagHoleSizeFromHoles(entry) {
                const holesSelect = entry.querySelector('.tag-holes-select');
                const holeSizeSelect = entry.querySelector('.tag-holesize-select');
                if (!holesSelect || !holeSizeSelect) return;
                const qty = holesSelect.value;
                if (qty === 'No holes') {
                    holeSizeSelect.innerHTML = '<option value="N/A">N/A</option>';
                    holeSizeSelect.disabled = true;
                } else if (qty === 'Cable tie slots') {
                    holeSizeSelect.innerHTML = '<option value="3/16 x 1/4" selected>3/16 x 1/4</option>';
                    holeSizeSelect.disabled = false;
                } else {
                    const prev = (holeSizeSelect.value === 'N/A') ? '1/8' : holeSizeSelect.value;
                    holeSizeSelect.innerHTML = ['1/8', '3/16', '1/4'].map(o => '<option value="' + o + '"' + (o === prev ?
                        ' selected' : '') + '>' + o + '</option>').join('');
                    holeSizeSelect.disabled = false;
                }
                entry.dataset.holeQty = qty;
                entry.dataset.holeSize = holeSizeSelect.value;
            }

            function getShapeSizingMode(shapeOverride) {
                const shapeValue = (shapeOverride || getEl('shape').value || 'Rectangle').trim();
                if (shapeValue === 'Circle') return 'circle';
                if (shapeValue === 'Square') return 'square';
                return 'free';
            }

            function normalizeDimensionsForShape(widthRaw, heightRaw, shapeValue) {
                const width = roundToThreeDecimals(Math.max(Number(widthRaw || 0), 0)),
                    height = roundToThreeDecimals(Math.max(Number(heightRaw || 0), 0));
                if (shapeValue === 'Circle') return {
                    width,
                    height: width,
                    sizeLabel: width ? formatThreeDecimals(width) + '" diameter' : '—'
                };
                if (shapeValue === 'Square') return {
                    width,
                    height: width,
                    sizeLabel: width ? formatThreeDecimals(width) + '" side' : '—'
                };
                return {
                    width,
                    height,
                    sizeLabel: width && height ? formatThreeDecimals(height) + '" × ' + formatThreeDecimals(width) + '"' : '—'
                };
            }

            function getNewSignDefaultSize() {
                const shapeMode = getShapeSizingMode();
                const globalWidth = String(getEl('widthIn').value || '3.000'),
                    globalHeight = String(getEl('heightIn').value || '1.000');
                // Auto mode always starts new tags at the global default (1x3) so auto-sizing calculates fresh
                if (sameSizeMode.value === 'auto') {
                    if (shapeMode === 'circle' || shapeMode === 'square') return {
                        width: globalWidth,
                        height: globalWidth
                    };
                    return {
                        width: globalWidth,
                        height: globalHeight
                    };
                }
                if (sameSizeMode.value !== 'custom') return {
                    width: globalWidth,
                    height: globalHeight
                };
                // Custom mode: inherit last entry's size as a convenience
                const entries = Array.from(document.querySelectorAll('.sign-entry'));
                const lastEntry = entries[entries.length - 1];
                let width = globalWidth,
                    height = globalHeight;
                if (lastEntry) {
                    const lw = lastEntry.querySelector('.sign-width'),
                        lh = lastEntry.querySelector('.sign-height');
                    if (lw && lw.value) width = String(lw.value);
                    if (lh && lh.value) height = String(lh.value);
                }
                if (shapeMode === 'circle' || shapeMode === 'square') return {
                    width,
                    height: width
                };
                return {
                    width,
                    height
                };
            }

            function renumberSignCards() {
                Array.from(document.querySelectorAll('.sign-entry')).forEach((entry, index) => {
                    entry.dataset.signIndex = String(index + 1);
                    const title = entry.querySelector('.sign-card-title');
                    if (title) title.textContent = 'Sign ' + (index + 1);
                });
            }

            function getSelectedPreviewEntry() {
                const entries = Array.from(document.querySelectorAll('.sign-entry'));
                return entries[selectedPreviewIndex] || entries[0] || null;
            }

            function rebuildPreviewSelector() {
                const entries = Array.from(document.querySelectorAll('.sign-entry'));
                previewSignSelect.innerHTML = '';
                entries.forEach((_, idx) => {
                    const o = document.createElement('option');
                    o.value = String(idx);
                    o.textContent = 'Sign ' + (idx + 1);
                    previewSignSelect.appendChild(o);
                });
                selectedPreviewIndex = Math.max(0, Math.min(selectedPreviewIndex, Math.max(entries.length - 1, 0)));
                previewSignSelect.value = String(selectedPreviewIndex);
            }

            function updateSizeFieldPresentation() {
                const mode = getShapeSizingMode();
                const widthInput = getEl('widthIn'),
                    heightInput = getEl('heightIn');
                if (mode === 'circle') {
                    globalWidthLabel.textContent = 'Diameter (in.)';
                    toggleHidden(globalHeightField, true);
                    if (heightInput && widthInput) heightInput.value = widthInput.value;
                } else if (mode === 'square') {
                    globalWidthLabel.textContent = 'Side (in.)';
                    toggleHidden(globalHeightField, true);
                    if (heightInput && widthInput) heightInput.value = widthInput.value;
                } else {
                    globalWidthLabel.textContent = 'Width (in.)';
                    globalHeightLabel.textContent = 'Height (in.)';
                    toggleHidden(globalHeightField, false);
                }
                document.querySelectorAll('.sign-entry').forEach(entry => {
                    const wl = entry.querySelector('.sign-width-label'),
                        hl = entry.querySelector('.sign-height-label'),
                        hf = entry.querySelector('.sign-height-field'),
                        wi = entry.querySelector('.sign-width'),
                        hi = entry.querySelector('.sign-height');
                    if (!wl || !hl || !hf || !wi || !hi) return;
                    if (mode === 'circle') {
                        wl.textContent = 'Diameter (in.)';
                        toggleHidden(hf, true);
                        hi.value = wi.value || '';
                    } else if (mode === 'square') {
                        wl.textContent = 'Side (in.)';
                        toggleHidden(hf, true);
                        hi.value = wi.value || '';
                    }
                    else {
                        wl.textContent = 'Width (in.)';
                        hl.textContent = 'Height (in.)';
                        toggleHidden(hf, false);
                    }
                    // Size row always visible — no hide/show needed
                });
            }

            function syncSizeModeUI() {
                if (sameSizeMode.value === 'auto') applyAutomaticTagSizing();
                // Global size fields only relevant when all tags share one size
                if (globalSizeWrap) toggleHidden(globalSizeWrap, sameSizeMode.value !== 'same');
                updateSizeFieldPresentation();
            }

            function addSignBox() {
                const nextIndex = document.querySelectorAll('.sign-entry').length + 1;
                const defaults = getNewSignDefaultSize();
                const gw = getEl('widthIn') ? (getEl('widthIn').value || defaults.width) : defaults.width;
                const gh = getEl('heightIn') ? (getEl('heightIn').value || defaults.height) : defaults.height;
                const card = buildSignCard('Sign ' + nextIndex, '', 1, gw, gh);
                signStack.appendChild(card);
                syncLineStyleEditor(card);
                bindSignInputs();
                selectedPreviewIndex = nextIndex - 1;
                rebuildPreviewSelector();
                syncSizeModeUI();
                updateSizeFieldPresentation();
                queueLiveEstimateUpdate();
            }

            function removeSignCard(entry) {
                const entries = Array.from(document.querySelectorAll('.sign-entry'));
                if (entries.length <= 1) {
                    const textarea = entry.querySelector('.sign-text');
                    if (textarea) textarea.value = '';
                    syncLineStyleEditor(entry);
                } else {
                    const removedIndex = entries.indexOf(entry);
                    entry.remove();
                    if (selectedPreviewIndex >= removedIndex) selectedPreviewIndex = Math.max(0, selectedPreviewIndex - 1);
                }
                renumberSignCards();
                bindSignInputs();
                rebuildPreviewSelector();
                queueLiveEstimateUpdate();
            }

            function duplicateSignCard(entry) {
                const textarea = entry.querySelector('.sign-text'),
                    qtyInput = entry.querySelector('.sign-qty'),
                    widthInput = entry.querySelector('.sign-width'),
                    heightInput = entry.querySelector('.sign-height');
                const styles = getStoredLineStyles(entry),
                    nextIndex = document.querySelectorAll('.sign-entry').length + 1;
                const card = buildSignCard('Sign ' + nextIndex, textarea ? textarea.value : '', Number(qtyInput ? qtyInput
                    .value : 1), widthInput ? widthInput.value : '', heightInput ? heightInput.value : '');
                card.dataset.align = entry.dataset.align || 'center';
                card.dataset.colorValue = entry.dataset.colorValue || 'black_white';
                card.dataset.holeQty = entry.dataset.holeQty || 'No holes';
                card.dataset.holeSize = entry.dataset.holeSize || '1/8';
                card.dataset.condense = entry.dataset.condense || 'no';
                card.dataset.cornerRadius = entry.dataset.cornerRadius || 'no';
                const spacingSelect = entry.querySelector('.sign-line-spacing'),
                    newSpacingSelect = card.querySelector('.sign-line-spacing');
                if (newSpacingSelect && spacingSelect) newSpacingSelect.value = spacingSelect.value;
                // sync per-tag controls in duplicate
                const colorSel = card.querySelector('.tag-color-select');
                if (colorSel) colorSel.value = entry.dataset.colorValue || 'black_white';
                const holesSel = card.querySelector('.tag-holes-select');
                if (holesSel) holesSel.value = entry.dataset.holeQty || 'No holes';
                const condenseSel = card.querySelector('.tag-condense-select');
                if (condenseSel) condenseSel.value = entry.dataset.condense || 'no';
                const radSelDup = card.querySelector('.tag-radius-select');
                if (radSelDup) radSelDup.value = entry.dataset.cornerRadius || 'no';
                setStoredLineStyles(card, styles);
                entry.after(card);
                syncTagHoleSizeFromHoles(card);
                syncLineStyleEditor(card);
                bindSignInputs();
                renumberSignCards();
                rebuildPreviewSelector();
                queueLiveEstimateUpdate();
            }

            function applyQuantityFromCard(entry) {
                const qtyInput = entry.querySelector('.sign-qty');
                if (!qtyInput) return;
                const qty = Math.max(1, Number(qtyInput.value || 1) || 1);
                qtyInput.value = String(qty);
                const entries = Array.from(document.querySelectorAll('.sign-entry')),
                    si = entries.indexOf(entry);
                entries.forEach((item, index) => {
                    if (index >= si) {
                        const tq = item.querySelector('.sign-qty');
                        if (tq) tq.value = String(qty);
                    }
                });
                queueLiveEstimateUpdate();
            }

            function applySizeFromCard(entry) {
                const wi = entry.querySelector('.sign-width'),
                    hi = entry.querySelector('.sign-height');
                if (!wi || !hi) return;
                const width = String(wi.value || ''),
                    height = String(hi.value || '');
                const entries = Array.from(document.querySelectorAll('.sign-entry')),
                    si = entries.indexOf(entry);
                entries.forEach((item, index) => {
                    if (index >= si) {
                        const tw = item.querySelector('.sign-width'),
                            th = item.querySelector('.sign-height');
                        if (tw) tw.value = width;
                        if (th) th.value = height;
                    }
                });
                queueLiveEstimateUpdate();
            }

            function bindSignInputs() {
                Array.from(document.querySelectorAll('.sign-entry')).forEach(entry => {
                    const textarea = entry.querySelector('.sign-text');
                    const spacingSelect = entry.querySelector('.sign-line-spacing');
                    const qtyInput = entry.querySelector('.sign-qty');
                    const widthInput = entry.querySelector('.sign-width');
                    const heightInput = entry.querySelector('.sign-height');
                    const applyQtyBtn = entry.querySelector('.apply-qty-below-btn');
                    const deleteBtn = entry.querySelector('.sign-delete-btn');
                    const duplicateBtn = entry.querySelector('.sign-duplicate-btn');
                    const compactAlignBtns = Array.from(entry.querySelectorAll('.compact-align-btn'));
                    const tagColorSelect = entry.querySelector('.tag-color-select');
                    const tagHolesSelect = entry.querySelector('.tag-holes-select');
                    const tagCondenseSelect = entry.querySelector('.tag-condense-select');
                    const detailsToggle = entry.querySelector('.tag-details-toggle');
                    const detailsFields = entry.querySelector('.tag-details-fields');

                    // Toggle tag details panel
                    if (detailsToggle && detailsFields) {
                        const toggleDetails = () => {
                            const isOpen = detailsFields.classList.contains('hidden');
                            detailsFields.classList.toggle('hidden', !isOpen);
                            detailsToggle.classList.toggle('open', isOpen);
                            detailsToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                        };
                        detailsToggle.onclick = toggleDetails;
                        detailsToggle.onkeydown = (e) => {
                            if (e.key === 'Enter' || e.key === ' ') {
                                e.preventDefault();
                                toggleDetails();
                            }
                        };
                    }

                    // Per-tag color
                    if (tagColorSelect) {
                        tagColorSelect.onchange = () => {
                            entry.dataset.colorValue = tagColorSelect.value;
                            queueLiveEstimateUpdate();
                        };
                    }
                    // Per-tag holes
                    if (tagHolesSelect) {
                        tagHolesSelect.onchange = () => {
                            syncTagHoleSizeFromHoles(entry);
                            queueLiveEstimateUpdate();
                        };
                    }
                    const tagHoleSizeSelect = entry.querySelector('.tag-holesize-select');
                    if (tagHoleSizeSelect) {
                        tagHoleSizeSelect.onchange = () => {
                            entry.dataset.holeSize = tagHoleSizeSelect.value;
                            queueLiveEstimateUpdate();
                        };
                    }
                    // Per-tag condense
                    if (tagCondenseSelect) {
                        tagCondenseSelect.onchange = () => {
                            entry.dataset.condense = tagCondenseSelect.value;
                            queueLiveEstimateUpdate();
                        };
                    }
                    const tagRadiusSelect = entry.querySelector('.tag-radius-select');
                    if (tagRadiusSelect) {
                        tagRadiusSelect.onchange = () => {
                            entry.dataset.cornerRadius = tagRadiusSelect.value;
                            queueLiveEstimateUpdate();
                        };
                    }

                    const updateActiveLineFromTextarea = () => {
                        setActiveLineIndex(entry, getLineSelectionRange(entry).start);
                        syncLineStyleEditor(entry);
                    };
                    if (textarea) {
                        const textHandler = () => {
                            if (sameSizeMode.value === 'auto' && entry.dataset.manualSizeOverride !== 'true'
                            ) entry.dataset.autoSized = 'true';
                            updateActiveLineFromTextarea();
                            queueLiveEstimateUpdate();
                        }; textarea.oninput = textHandler; textarea.onchange = textHandler; textarea.onkeyup =
                            textHandler; textarea.onclick = updateActiveLineFromTextarea; textarea.onfocus = () => {
                                const idx = Array.from(document.querySelectorAll('.sign-entry')).indexOf(entry);
                                if (idx >= 0) {
                                    selectedPreviewIndex = idx;
                                    previewSignSelect.value = String(idx);
                                }
                                updateActiveLineFromTextarea();
                                renderDesignPreview();
                            };
                    }
                    compactAlignBtns.forEach(btn => {
                        btn.onclick = () => {
                            entry.dataset.align = btn.dataset.align || 'center';
                            updateAlignButtons(entry);
                            syncLineStyleEditor(entry);
                            queueLiveEstimateUpdate();
                        };
                    });
                    const inlinePanel = entry.querySelector('.line-inline-panel');
                    if (inlinePanel) {
                        inlinePanel.onmousedown = event => {
                            const row = event.target.closest('.line-inline-row');
                            if (!row) return;
                            if (Boolean(event.target.closest('select,input,button,label,option'))) return;
                            setActiveLineIndex(entry, Number(row.dataset.lineIndex || 0));
                            syncLineStyleEditor(entry);
                        };
                        inlinePanel.onfocusin = event => {
                            const row = event.target.closest('.line-inline-row');
                            if (!row) return;
                            setActiveLineIndex(entry, Number(row.dataset.lineIndex || 0));
                        };
                        inlinePanel.onchange = event => {
                            const row = event.target.closest('.line-inline-row');
                            if (!row) return;
                            const lineIndex = Number(row.dataset.lineIndex || 0);
                            setActiveLineIndex(entry, lineIndex);
                            const sizeSelect = row.querySelector('.line-inline-size'),
                                customInput = row.querySelector('.line-inline-custom'),
                                boldInput = row.querySelector('.line-inline-bold-input');
                            if (event.target === sizeSelect && customInput) {
                                customInput.classList.toggle('hidden', sizeSelect.value !== 'custom');
                                customInput.classList.toggle('visible', sizeSelect.value === 'custom');
                            }
                            const selectedIndexes = getSelectedLineIndexes(entry);
                            const targetIndexes = hasMultiLineSelection(entry) ? selectedIndexes : [lineIndex];
                            const patch = {
                                size: sizeSelect ? sizeSelect.value : '1/4',
                                customSize: customInput ? customInput.value.trim() : '',
                                bold: Boolean(boldInput && boldInput.checked)
                            };
                            targetIndexes.forEach(idx => writeLineStyle(entry, idx, patch));
                            syncLineStyleEditor(entry);
                            queueLiveEstimateUpdate();
                        };
                        inlinePanel.oninput = event => {
                            const row = event.target.closest('.line-inline-row');
                            if (!row) return;
                            const lineIndex = Number(row.dataset.lineIndex || 0);
                            setActiveLineIndex(entry, lineIndex);
                            const customInput = row.querySelector('.line-inline-custom');
                            if (event.target === customInput) {
                                const si = getSelectedLineIndexes(entry);
                                const ti = hasMultiLineSelection(entry) ? si : [lineIndex];
                                ti.forEach(idx => writeLineStyle(entry, idx, {
                                    customSize: customInput.value.trim()
                                }));
                                syncLineStyleEditor(entry);
                                queueLiveEstimateUpdate();
                            }
                        };
                        inlinePanel.onclick = event => {
                            const row = event.target.closest('.line-inline-row');
                            if (!row) return;
                            const lineIndex = Number(row.dataset.lineIndex || 0);
                            const applyBtn = event.target.closest('.line-inline-apply-btn');
                            if (!applyBtn) return;
                            event.preventDefault();
                            event.stopPropagation();
                            const sizeSelect = row.querySelector('.line-inline-size'),
                                customInput = row.querySelector('.line-inline-custom');
                            const sourceSize = sizeSelect ? sizeSelect.value : '1/4',
                                sourceCustomSize = customInput ? customInput.value.trim() : '';
                            const current = getStoredLineStyles(entry);
                            const next = current.map((style, idx) => idx < lineIndex ? {
                                ...getDefaultLineStyle(),
                                ...(style || {})
                            } : {
                                ...getDefaultLineStyle(),
                                ...(style || {}),
                                size: sourceSize,
                                customSize: sourceCustomSize
                            });
                            setStoredLineStyles(entry, next);
                            entry.dataset.activeLineIndex = String(lineIndex);
                            const ta = entry.querySelector('.sign-text');
                            if (ta) {
                                const rawLines = normalizeNewlines(ta.value || '').split(NEWLINE);
                                let startPos = 0;
                                for (let i = 0; i < lineIndex; i++) startPos += (rawLines[i] || '').length + 1;
                                ta.focus();
                                ta.setSelectionRange(startPos, startPos);
                            }
                            syncLineStyleEditor(entry);
                            const reRows = Array.from(entry.querySelectorAll('.line-inline-row'));
                            reRows.forEach((tr, idx) => {
                                if (idx < lineIndex) return;
                                const ts = tr.querySelector('.line-inline-size'),
                                    tc = tr.querySelector('.line-inline-custom');
                                if (ts) ts.value = sourceSize;
                                if (tc) {
                                    tc.value = sourceCustomSize;
                                    tc.classList.toggle('hidden', sourceSize !== 'custom');
                                    tc.classList.toggle('visible', sourceSize === 'custom');
                                }
                            });
                            queueLiveEstimateUpdate();
                        };
                    }
                    if (spacingSelect) {
                        spacingSelect.oninput = queueLiveEstimateUpdate;
                        spacingSelect.onchange = () => {
                            syncLineStyleEditor(entry);
                            queueLiveEstimateUpdate();
                        };
                    }
                    if (qtyInput) {
                        qtyInput.oninput = queueLiveEstimateUpdate;
                        qtyInput.onchange = queueLiveEstimateUpdate;
                        qtyInput.onkeyup = queueLiveEstimateUpdate;
                    }
                    if (widthInput) {
                        const wh = () => {
                            if (sameSizeMode.value === 'auto') entry.dataset.manualSizeOverride = 'true';
                            if (sameSizeMode.value === 'same') sameSizeMode.value = 'custom';
                            updateSizeFieldPresentation();
                            queueLiveEstimateUpdate();
                        };
                        widthInput.oninput = wh;
                        widthInput.onchange = wh;
                        widthInput.onkeyup = wh;
                    }
                    if (heightInput) {
                        const hh = () => {
                            if (sameSizeMode.value === 'auto') entry.dataset.manualSizeOverride = 'true';
                            if (sameSizeMode.value === 'same') sameSizeMode.value = 'custom';
                            queueLiveEstimateUpdate();
                        };
                        heightInput.oninput = hh;
                        heightInput.onchange = hh;
                        heightInput.onkeyup = hh;
                    }
                    const applySizeBtn = entry.querySelector('.apply-size-below-btn');
                    if (applySizeBtn) applySizeBtn.onclick = () => applySizeFromCard(entry);
                    if (applyQtyBtn) applyQtyBtn.onclick = () => applyQuantityFromCard(entry);
                    if (deleteBtn) deleteBtn.onclick = () => removeSignCard(entry);
                    if (duplicateBtn) duplicateBtn.onclick = () => duplicateSignCard(entry);
                    syncLineStyleEditor(entry);
                });
            }

            function getSignData() {
                const isCustomSize = sameSizeMode.value === 'custom' || sameSizeMode.value === 'auto';
                const shapeValue = getEl('shape').value || 'Rectangle';
                return Array.from(document.querySelectorAll('.sign-entry')).map((entry, index) => {
                    const raw = entry.querySelector('.sign-text') ? entry.querySelector('.sign-text').value : '';
                    const lineTexts = splitLines(raw);
                    const storedStyles = getLineStylesForEntry(entry);
                    const lines = lineTexts.map((text, li) => ({
                        text,
                        bold: Boolean((storedStyles[li] || {}).bold),
                        size: (storedStyles[li] || {}).size || '1/4',
                        customSize: (storedStyles[li] || {}).customSize || ''
                    }));
                    const qty = Math.max(1, Number(entry.querySelector('.sign-qty') ? entry.querySelector(
                        '.sign-qty').value : 1) || 1);
                    const lineSpacing = entry.querySelector('.sign-line-spacing') ? entry.querySelector(
                        '.sign-line-spacing').value : 'full';
                    const tagWInput = entry.querySelector('.sign-width'),
                        tagHInput = entry.querySelector('.sign-height');
                    const tagWVal = tagWInput && tagWInput.value ? Number(tagWInput.value) : 0;
                    const tagHVal = tagHInput && tagHInput.value ? Number(tagHInput.value) : 0;
                    const globalW = Number(getEl('widthIn').value || 0),
                        globalH = Number(getEl('heightIn').value || 0);
                    const inputWidth = tagWVal > 0 ? tagWVal : globalW;
                    const inputHeight = tagHVal > 0 ? tagHVal : globalH;
                    const normalized = normalizeDimensionsForShape(inputWidth, inputHeight, shapeValue);
                    const condense = (entry.querySelector('.tag-condense-select') ? entry.querySelector(
                        '.tag-condense-select').value : entry.dataset.condense) || 'no';
                    const cornerRadius = (entry.querySelector('.tag-radius-select') ? entry.querySelector(
                        '.tag-radius-select').value : entry.dataset.cornerRadius) || 'no';
                    return {
                        index: index + 1,
                        color: entry.dataset.colorValue || 'black_white',
                        raw,
                        lines,
                        qty,
                        width: normalized.width,
                        height: normalized.height,
                        sizeLabel: normalized.sizeLabel,
                        lineCount: lines.length || 1,
                        charCount: countCharacters(raw),
                        align: entry.dataset.align || 'center',
                        lineSpacing,
                        holes: entry.dataset.holeQty || 'No holes',
                        holeSize: entry.dataset.holeSize || '1/8',
                        condense,
                        cornerRadius
                    };
                }).filter(item => item.raw.trim() !== '');
            }

            function calculateSingleTag(rawText, data, copiesPerTag, widthOverride, heightOverride) {
                const widthIn = Math.max(0, Number(widthOverride || data.widthIn || 0) || 0),
                    heightIn = Math.max(0, Number(heightOverride || data.heightIn || 0) || 0);
                const safeQty = Math.max(1, Number(copiesPerTag || 1) || 1),
                    unitPrice = widthIn * heightIn * PRICING.squareInchRate;
                return {
                    unitPrice: Number.isFinite(unitPrice) ? unitPrice : 0,
                    widthIn,
                    heightIn,
                    subtotal: Number.isFinite(unitPrice * safeQty) ? unitPrice * safeQty : 0
                };
            }

            function calculateQuote(data) {
                const signData = getSignData();
                const quoteItems = signData.map(tag => ({
                    tag,
                    calc: calculateSingleTag(tag.raw, data, tag.qty, tag.width, tag.height)
                }));
                const totalPieces = signData.reduce((sum, tag) => sum + tag.qty, 0);
                const rawSubtotal = quoteItems.reduce((sum, item) => sum + item.calc.subtotal, 0);
                const adjustedSubtotal = Math.max(rawSubtotal, PRICING.minimumOrder);
                const sizeKeys = quoteItems.map(item => String(item.calc.widthIn) + 'x' + String(item.calc.heightIn));
                const sameSize = sizeKeys.length ? sizeKeys.every(k => k === sizeKeys[0]) : false;
                const firstItem = quoteItems[0] ? quoteItems[0].calc : null;
                const firstWidth = firstItem ? firstItem.widthIn : Number(data.widthIn || 0),
                    firstHeight = firstItem ? firstItem.heightIn : Number(data.heightIn || 0);
                const firstSizeLabel = signData[0] ? signData[0].sizeLabel : (formatThreeDecimals(firstHeight) + '" × ' +
                    formatThreeDecimals(firstWidth) + '"');
                return {
                    widthIn: firstWidth,
                    heightIn: firstHeight,
                    sizeLabel: firstSizeLabel,
                    sameSize,
                    totalPieces,
                    material: data.material,
                    rawSubtotal: Number(rawSubtotal.toFixed(2)),
                    subtotal: Number(adjustedSubtotal.toFixed(2)),
                    minimumApplied: rawSubtotal < PRICING.minimumOrder,
                    minimumOrder: PRICING.minimumOrder,
                    shipping: 0,
                    total: Number(adjustedSubtotal.toFixed(2)),
                    leadTime: getLeadTime(),
                    quoteItems,
                    signData
                };
            }

            function updateSummary(data, result) {
                setText('summarySize', result.sameSize ? result.sizeLabel : 'Mixed');
                setText('summaryQty', String(result.totalPieces));
                setText('summaryMaterial', materialLabel());
                const colorValues = (result.signData || []).map(tag => tag.color || 'black_white');
                const hasMixed = colorValues.length > 0 && !colorValues.every(v => v === colorValues[0]);
                setText('summaryColor', hasMixed ? 'Mixed' : colorLabel(colorValues[0] || 'black_white'));
                setText('summaryFont', fontLabel(data.fontFamily));
                setText('summaryHoles', data.holes || '—');
                setText('summaryHoleSize', data.holeSize || '—');
                setText('summaryShape', data.shape || '—');
            }

            function setSummaryDefaults() {
                ['summarySize', 'summaryQty', 'summaryMaterial', 'summaryColor', 'summaryFont', 'summaryHoles',
                    'summaryHoleSize', 'summaryShape'
                ].forEach(id => setText(id, '—'));
            }

            function getAutoSizingHoleDiameter(data, tagWidth, tagHeight) {
                const hasHoles = Boolean(data.holes && data.holes !== 'No holes');
                if (!hasHoles) return 0;
                const spec = getSelectedHoleSpec(data.holes || 'No holes', data.holeSize || '', tagWidth, tagHeight);
                if (spec && spec.type === 'round') return spec.diameter;
                if (spec && spec.type === 'slot') return spec.height;
                return getAutoHoleDiameter(tagWidth, tagHeight);
            }

            function getAutoSizingContentMetrics(entry, data) {
                const raw = entry.querySelector('.sign-text') ? entry.querySelector('.sign-text').value : '';
                const lines = splitLines(raw),
                    storedStyles = getLineStylesForEntry(entry);
                const fontFamily = data.fontFamily || 'Arial, Helvetica, sans-serif';
                const spacingMultiplier = getLineSpacingMultiplier(entry.querySelector('.sign-line-spacing') ? entry
                    .querySelector('.sign-line-spacing').value : 'full');
                const naturalWidths = [],
                    lineHeights = [],
                    interlineGaps = [];
                lines.forEach((lineText, index) => {
                    const style = storedStyles[index] || getDefaultLineStyle();
                    const fontInches = parseSizeValueToInches(getEffectiveLineSizeValue(style)) ||
                        BASELINE_LINE_SIZE_IN;
                    naturalWidths.push(measureTextWidthInches(lineText, fontInches, fontFamily, Boolean(style.bold),
                        1));
                    const xh = measureReferenceXHeightInches(fontInches, fontFamily, Boolean(style.bold));
                    const lh = roundToThreeDecimals(xh * 1.05);
                    lineHeights.push(lh);
                    interlineGaps.push(roundToThreeDecimals(lh * spacingMultiplier * 0.5));
                });
                let totalTextHeight = 0;
                if (lineHeights.length === 1) totalTextHeight = lineHeights[0];
                else if (lineHeights.length > 1) totalTextHeight = lineHeights.reduce((s, v) => s + v, 0) + interlineGaps
                    .slice(0, lineHeights.length - 1).reduce((s, v) => s + v, 0);
                return {
                    lines,
                    widestTextWidth: Math.max(...naturalWidths, 0),
                    totalTextHeight: roundToThreeDecimals(totalTextHeight)
                };
            }

            function estimateAutoSizedTagDimensions(entry, data) {
                const metrics = getAutoSizingContentMetrics(entry, data);
                if (!metrics.lines.length) return {
                    width: roundToThreeDecimals(Number(getEl('widthIn').value || 3) || 3),
                    height: roundToThreeDecimals(Number(getEl('heightIn').value || 1) || 1)
                };
                const shapeValue = data.shape || 'Rectangle';
                let width = Math.max(0.25, Number(entry.querySelector('.sign-width') ? entry.querySelector('.sign-width')
                    .value : getEl('widthIn').value || 3) || 3);
                let height = Math.max(0.25, Number(entry.querySelector('.sign-height') ? entry.querySelector('.sign-height')
                    .value : getEl('heightIn').value || 1) || 1);
                const hasHoles = Boolean(data.holes && data.holes !== 'No holes');
                const condenseEnabled = (entry.querySelector('.tag-condense-select') ? entry.querySelector(
                    '.tag-condense-select').value : entry.dataset.condense || 'no') === 'yes';
                for (let i = 0; i < 5; i++) {
                    const holeDiameter = getAutoSizingHoleDiameter(data, width, height);
                    const geometry = getTagGeometry({
                        tagWidth: width,
                        tagHeight: height,
                        hasHoles,
                        holeDiameter,
                        holeQuantity: data.holes || 'No holes',
                        holeSizeValue: data.holeSize || ''
                    });
                    // Always size to natural text width — condense is a rendering option, not a sizing option
                    let nextWidth = metrics.widestTextWidth + geometry.margins.left + geometry.margins.right;
                    let nextHeight = metrics.totalTextHeight + geometry.margins.top + geometry.margins.bottom;
                    nextWidth = roundToThreeDecimals(roundUpToIncrement(nextWidth));
                    nextHeight = roundToThreeDecimals(roundUpToIncrement(nextHeight));
                    if (shapeValue === 'Circle' || shapeValue === 'Square') {
                        const side = roundToThreeDecimals(roundUpToIncrement(Math.max(nextWidth, nextHeight)));
                        nextWidth = side;
                        nextHeight = side;
                    }
                    width = Math.max(0.25, nextWidth);
                    height = Math.max(0.25, nextHeight);
                }
                return {
                    width: roundToThreeDecimals(width),
                    height: roundToThreeDecimals(height)
                };
            }

            function applyAutomaticTagSizing(force = false) {
                if (sameSizeMode.value !== 'auto') return;
                const data = Object.fromEntries(new FormData(form).entries());
                document.querySelectorAll('.sign-entry').forEach(entry => {
                    const wi = entry.querySelector('.sign-width'),
                        hi = entry.querySelector('.sign-height');
                    if (!wi || !hi) return;
                    if (entry.dataset.manualSizeOverride === 'true' && !force) return;
                    const calc = estimateAutoSizedTagDimensions(entry, data); wi.value = formatThreeDecimals(calc.width); hi
                        .value = formatThreeDecimals(calc.height); entry.dataset.autoSized = 'true';
                    if (force) entry.dataset.manualSizeOverride = 'false';
                });
                updateSizeFieldPresentation();
            }

            // ── Ruler helper ──
            function renderRuler(svg, tagWidthIn, tagHeightIn, offsetX, offsetY, pxPerInch) {
                const rulerGroup = createSvgEl('g');
                const rulerColor = '#94a3b8';
                const textColor = '#64748b';
                const tickSmall = 4,
                    tickMid = 7,
                    tickBig = 10;
                // Horizontal ruler (below tag)
                const rulerY = offsetY + tagHeightIn * pxPerInch + 8;
                rulerGroup.appendChild(createSvgEl('line', {
                    x1: offsetX,
                    y1: rulerY,
                    x2: offsetX + tagWidthIn * pxPerInch,
                    y2: rulerY,
                    stroke: rulerColor,
                    'stroke-width': 1
                }));
                // ticks at every 1/4"
                for (let x = 0; x <= tagWidthIn; x += 0.25) {
                    const px = offsetX + x * pxPerInch;
                    const isWhole = Math.abs(x - Math.round(x)) < 0.01;
                    const isHalf = !isWhole && Math.abs((x * 2) - Math.round(x * 2)) < 0.01;
                    const tickLen = isWhole ? tickBig : isHalf ? tickMid : tickSmall;
                    rulerGroup.appendChild(createSvgEl('line', {
                        x1: px,
                        y1: rulerY,
                        x2: px,
                        y2: rulerY + tickLen,
                        stroke: rulerColor,
                        'stroke-width': 1
                    }));
                    if (isWhole && x > 0) {
                        const lbl = createSvgEl('text', {
                            x: px,
                            y: rulerY + tickBig + 10,
                            'text-anchor': 'middle',
                            'font-size': 9,
                            fill: textColor,
                            'font-family': 'Arial, Helvetica, sans-serif'
                        });
                        lbl.textContent = x + '"';
                        rulerGroup.appendChild(lbl);
                    }
                }
                // Vertical ruler (right of tag)
                const rulerX = offsetX + tagWidthIn * pxPerInch + 8;
                rulerGroup.appendChild(createSvgEl('line', {
                    x1: rulerX,
                    y1: offsetY,
                    x2: rulerX,
                    y2: offsetY + tagHeightIn * pxPerInch,
                    stroke: rulerColor,
                    'stroke-width': 1
                }));
                for (let y = 0; y <= tagHeightIn; y += 0.25) {
                    const py = offsetY + y * pxPerInch;
                    const isWhole = Math.abs(y - Math.round(y)) < 0.01;
                    const isHalf = !isWhole && Math.abs((y * 2) - Math.round(y * 2)) < 0.01;
                    const tickLen = isWhole ? tickBig : isHalf ? tickMid : tickSmall;
                    rulerGroup.appendChild(createSvgEl('line', {
                        x1: rulerX,
                        y1: py,
                        x2: rulerX + tickLen,
                        y2: py,
                        stroke: rulerColor,
                        'stroke-width': 1
                    }));
                    if (isWhole && y > 0) {
                        const lbl = createSvgEl('text', {
                            x: rulerX + tickBig + 12,
                            y: py + 3,
                            'text-anchor': 'start',
                            'font-size': 9,
                            fill: textColor,
                            'font-family': 'Arial, Helvetica, sans-serif'
                        });
                        lbl.textContent = y + '"';
                        rulerGroup.appendChild(lbl);
                    }
                }
                svg.appendChild(rulerGroup);
            }

            function getTagOutlineStroke(bgColor) {
                const hex = String(bgColor || '').replace('#', '');
                if (hex.length !== 6) return 'none';
                const r = parseInt(hex.slice(0, 2), 16),
                    g = parseInt(hex.slice(2, 4), 16),
                    b = parseInt(hex.slice(4, 6), 16);
                if ([r, g, b].some(v => Number.isNaN(v))) return 'none';
                const luminance = (0.2126 * r + 0.7152 * g + 0.0722 * b) / 255;
                // Show a border when the tag is light enough to blend into the white preview surface
                return luminance > 0.72 ? '#b0b8c4' : 'none';
            }

            function renderPreviewShape(svg, shape, bgColor, radius, width, height, offsetX, offsetY) {
                const stroke = getTagOutlineStroke(bgColor);
                const strokeW = stroke === 'none' ? 0 : 1;
                if (shape === 'Circle') {
                    svg.appendChild(createSvgEl('circle', {
                        cx: offsetX + width / 2,
                        cy: offsetY + height / 2,
                        r: Math.min(width, height) / 2,
                        fill: bgColor,
                        stroke,
                        'stroke-width': strokeW
                    }));
                    return;
                }
                if (shape === 'Square') {
                    const side = Math.min(width, height);
                    svg.appendChild(createSvgEl('rect', {
                        x: offsetX + (width - side) / 2,
                        y: offsetY + (height - side) / 2,
                        width: side,
                        height: side,
                        rx: radius,
                        fill: bgColor,
                        stroke,
                        'stroke-width': strokeW
                    }));
                    return;
                }
                svg.appendChild(createSvgEl('rect', {
                    x: offsetX,
                    y: offsetY,
                    width,
                    height,
                    rx: radius,
                    fill: bgColor,
                    stroke,
                    'stroke-width': strokeW
                }));
            }

            function getContrastSafeAreaStroke(bgColor) {
                const hex = String(bgColor || '').replace('#', '');
                if (hex.length !== 6) return '#5d5d5d';
                const r = parseInt(hex.slice(0, 2), 16),
                    g = parseInt(hex.slice(2, 4), 16),
                    b = parseInt(hex.slice(4, 6), 16);
                if ([r, g, b].some(v => Number.isNaN(v))) return '#5d5d5d';
                const luminance = (0.2126 * r + 0.7152 * g + 0.0722 * b) / 255;
                return luminance < 0.5 ? '#f8f8f2' : '#5d5d5d';
            }

            function getContrastErrorStroke(bgColor) {
                const hex = String(bgColor || '').replace('#', '');
                if (hex.length !== 6) return {
                    stroke: '#c62828',
                    strokeWidth: 2,
                    strokeDasharray: '6 3',
                    strokeOpacity: 0.96
                };
                const r = parseInt(hex.slice(0, 2), 16),
                    g = parseInt(hex.slice(2, 4), 16),
                    b = parseInt(hex.slice(4, 6), 16);
                if ([r, g, b].some(v => Number.isNaN(v))) return {
                    stroke: '#c62828',
                    strokeWidth: 2,
                    strokeDasharray: '6 3',
                    strokeOpacity: 0.96
                };
                const luminance = (0.2126 * r + 0.7152 * g + 0.0722 * b) / 255;
                const isRedDominant = r >= 150 && g <= 90 && b <= 90;
                const useLightWarning = luminance < 0.5 || isRedDominant;
                return useLightWarning ? {
                    stroke: '#fff3b0',
                    strokeWidth: 2.25,
                    strokeDasharray: '7 3',
                    strokeOpacity: 1
                } : {
                    stroke: '#c62828',
                    strokeWidth: 2,
                    strokeDasharray: '6 3',
                    strokeOpacity: 0.96
                };
            }

            function renderDesignPreview() {
                const data = Object.fromEntries(new FormData(form).entries());
                const signData = getSignData();
                const totalEntries = Math.max(document.querySelectorAll('.sign-entry').length, 1);
                selectedPreviewIndex = Math.max(0, Math.min(selectedPreviewIndex, totalEntries - 1));
                previewSignSelect.value = String(selectedPreviewIndex);
                designPreviewSvg.innerHTML = '';

                // viewBox accommodates ruler: add ~40px right and ~40px bottom padding
                const VBW = 460,
                    VBH = 300;
                designPreviewSvg.setAttribute('viewBox', '0 0 ' + VBW + ' ' + VBH);

                if (!signData.length) {
                    const emptyText = createSvgEl('text', {
                        x: VBW / 2,
                        y: VBH / 2,
                        'text-anchor': 'middle',
                        'font-size': 15,
                        fill: '#64748b',
                        'font-weight': 600,
                        'font-family': 'Arial, Helvetica, sans-serif'
                    });
                    emptyText.textContent = 'Add sign text to preview the design';
                    designPreviewSvg.appendChild(emptyText);
                    designPreviewMeta.textContent = 'Start entering your sign details to see a live preview.';
                    previewWarning.classList.remove('show');
                    previewWarning.textContent = '';
                    return;
                }

                const active = signData[Math.min(selectedPreviewIndex, signData.length - 1)] || signData[0];
                const colorPairValue = colorPair(active.color || 'black_white');
                const bgColor = colorPairValue[0],
                    textColor = colorPairValue[1];
                const shapeValue = data.shape || 'Rectangle';
                const widthIn = Math.max(Number(active.width || 0) || 3, 0.25);
                const heightIn = Math.max(Number(active.height || 0) || 1, 0.25);

                // Reserve ~40px for ruler on right and bottom
                const rulerPad = 40;
                const usableW = VBW - rulerPad - 16; // 16 left pad
                const usableH = VBH - rulerPad - 16; // 16 top pad
                const pxPerInch = Math.min(usableW / widthIn, usableH / heightIn);
                const previewWidth = widthIn * pxPerInch,
                    previewHeight = heightIn * pxPerInch;
                const offsetX = (usableW - previewWidth) / 2 + 8;
                const offsetY = (usableH - previewHeight) / 2 + 8;
                const cornerRadiusIn1 = (active.cornerRadius === 'yes') ? 0.125 : 0;
                const radiusValue = cornerRadiusIn1 * pxPerInch;

                // Shadow
                designPreviewSvg.appendChild(createSvgEl('rect', {
                    x: offsetX + 5,
                    y: offsetY + 7,
                    width: previewWidth,
                    height: previewHeight,
                    rx: Math.min(radiusValue + 2, 18),
                    fill: 'rgba(15,23,42,0.10)'
                }));
                renderPreviewShape(designPreviewSvg, shapeValue, bgColor, radiusValue, previewWidth, previewHeight, offsetX,
                    offsetY);

                const effectiveHoles = active.holes || 'No holes',
                    effectiveHoleSize = active.holeSize || '1/8';
                const hasHoles = Boolean(effectiveHoles && effectiveHoles !== 'No holes');
                const selectedHoleSpec = getSelectedHoleSpec(effectiveHoles, effectiveHoleSize, widthIn, heightIn);
                const holeDiameter = selectedHoleSpec && selectedHoleSpec.type === 'round' ? selectedHoleSpec.diameter : (hasHoles ?
                    getAutoHoleDiameter(widthIn, heightIn) : 0);
                const geometry = getTagGeometry({
                    tagWidth: widthIn,
                    tagHeight: heightIn,
                    hasHoles,
                    holeDiameter,
                    holeQuantity: effectiveHoles,
                    holeSizeValue: effectiveHoleSize
                });
                const safeAreaPx = {
                    x: offsetX + inchesToPx(geometry.safeArea.x, pxPerInch),
                    y: offsetY + inchesToPx(geometry.safeArea.y, pxPerInch),
                    width: inchesToPx(geometry.safeArea.width, pxPerInch),
                    height: inchesToPx(geometry.safeArea.height, pxPerInch)
                };

                const overlay = createSvgEl('g', {
                    id: 'safeAreaOverlay'
                });
                const safeRect = createSvgEl('rect', {
                    x: safeAreaPx.x,
                    y: safeAreaPx.y,
                    width: safeAreaPx.width,
                    height: safeAreaPx.height,
                    fill: 'none',
                    stroke: getContrastSafeAreaStroke(bgColor),
                    'stroke-dasharray': '4 3',
                    'stroke-width': 1
                });
                overlay.appendChild(safeRect);
                renderHoleFeatures(overlay, effectiveHoles, effectiveHoleSize, widthIn, heightIn, offsetX, offsetY, pxPerInch,
                    textColor);
                designPreviewSvg.appendChild(overlay);

                // Ruler
                renderRuler(designPreviewSvg, widthIn, heightIn, offsetX, offsetY, pxPerInch);

                const safeAreaCenterX = safeAreaPx.x + safeAreaPx.width / 2,
                    safeAreaCenterY = safeAreaPx.y + safeAreaPx.height / 2;
                const align = active.align || 'center',
                    alignmentPadding = 10;
                let textAnchor = 'middle', textX = safeAreaCenterX;
                if (align === 'left') {
                    textAnchor = 'start';
                    textX = safeAreaPx.x + alignmentPadding;
                } else if (align === 'right') {
                    textAnchor = 'end';
                    textX = safeAreaPx.x + safeAreaPx.width - alignmentPadding;
                }

                const condensed = (active.condense || 'no') === 'yes';
                const spacingMultiplier = getLineSpacingMultiplier(active.lineSpacing || 'full');
                const lines = active.lines.length ? active.lines : [{
                    text: 'PREVIEW',
                    bold: false,
                    size: '1/4',
                    customSize: ''
                }];
                const portalStageScale = previewWidth / Math.max(widthIn * PORTAL_TAG_PX_PER_IN, 1);
                const renderedLines = lines.map(line => {
                    const requestedHeightIn = parseSizeValueToInches(getEffectiveLineSizeValue(line)) ||
                        BASELINE_LINE_SIZE_IN;
                    const fontSize = Math.max(7, requestedHeightIn * PORTAL_FONT_PX_PER_IN * portalStageScale);
                    const fontFamily = data.fontFamily || 'Arial, Helvetica, sans-serif';
                    const xMetrics = measureReferenceXMetrics(designPreviewSvg, fontSize, fontFamily, line.bold ? 700 :
                        400);
                    const lineHeight = Math.max(xMetrics.height * 1.0, xMetrics.height + 2);
                    const interlineGap = Math.max(0, lineHeight * spacingMultiplier * 0.5);
                    const ascent = xMetrics.ascent;
                    return {
                        ...line,
                        fontSize,
                        lineHeight,
                        interlineGap,
                        ascent,
                        textValue: line.text || ''
                    };
                });
                const totalBlockHeight = renderedLines.length <= 1 ? (renderedLines[0] ? renderedLines[0].lineHeight : 0) :
                    renderedLines.reduce((s, l) => s + l.lineHeight, 0) + renderedLines.slice(0, renderedLines.length - 1)
                        .reduce((s, l) => s + l.interlineGap, 0);
                let currentY = safeAreaCenterY - totalBlockHeight / 2;
                const textGroup = createSvgEl('g');
                designPreviewSvg.appendChild(textGroup);
                const renderedTextEls = [];
                renderedLines.forEach((line, index) => {
                    const fontFamily = data.fontFamily || 'Arial, Helvetica, sans-serif';
                    const baselineY = currentY + ((line.lineHeight - line.fontSize) / 2) + line.ascent;
                    const textEl = createSvgEl('text', {
                        x: textX,
                        y: baselineY,
                        'text-anchor': textAnchor,
                        'dominant-baseline': 'middle',
                        'font-size': line.fontSize,
                        fill: textColor,
                        'font-weight': line.bold ? 700 : 400,
                        'font-family': fontFamily
                    });
                    textEl.textContent = line.textValue;
                    textGroup.appendChild(textEl);
                    renderedTextEls.push({
                        line,
                        textEl,
                        baselineY
                    });
                    currentY += line.lineHeight;
                    if (index < renderedLines.length - 1) currentY += line.interlineGap;
                });
                let naturalTextWidth = 0;
                renderedTextEls.forEach(item => {
                    try {
                        const box = item.textEl.getBBox();
                        item.naturalBox = box;
                        naturalTextWidth = Math.max(naturalTextWidth, box.width || 0);
                    } catch (_) {
                        item.naturalBox = {
                            x: textX,
                            y: item.baselineY,
                            width: 0,
                            height: item.line.fontSize
                        };
                    }
                });
                naturalTextWidth = Math.max(naturalTextWidth, 0.1);
                const safeTextWidth = geometry.safeArea.width;
                const naturalTextWidthIn = naturalTextWidth / pxPerInch;
                const condenseRatio = condensed ? Math.min(1, safeTextWidth / Math.max(naturalTextWidthIn, 0.0001)) : 1;
                renderedTextEls.forEach(item => {
                    if (condenseRatio !== 1) item.textEl.setAttribute('transform', 'translate(' + safeAreaCenterX +
                        ',0) scale(' + condenseRatio + ',1) translate(' + (-safeAreaCenterX) + ',0)');
                    else item.textEl.removeAttribute('transform');
                });
                let verticalOffset = 0;
                try {
                    const groupBox = textGroup.getBBox();
                    const textCenterY = groupBox.y + groupBox.height / 2;
                    verticalOffset = safeAreaCenterY - textCenterY;
                    textGroup.setAttribute('transform', 'translate(0 ' + verticalOffset + ')');
                } catch (_) {
                    textGroup.removeAttribute('transform');
                }
                let minX = Infinity,
                    minY = Infinity,
                    maxX = -Infinity,
                    maxY = -Infinity;
                renderedTextEls.forEach(item => {
                    const box = item.naturalBox || {
                        x: textX,
                        y: item.baselineY,
                        width: 0,
                        height: item.line.fontSize
                    };
                    const finalWidth = box.width * condenseRatio;
                    let left = box.x;
                    if (textAnchor === 'middle') left = textX - finalWidth / 2;
                    else if (textAnchor === 'end') left = textX - finalWidth;
                    minX = Math.min(minX, left);
                    minY = Math.min(minY, box.y + verticalOffset);
                    maxX = Math.max(maxX, left + finalWidth);
                    maxY = Math.max(maxY, box.y + box.height + verticalOffset);
                });
                let validation = {
                    fits: true,
                    message: ''
                };
                if (minX !== Infinity) {
                    const textBoundsInches = {
                        x: (minX - offsetX) / pxPerInch,
                        y: (minY - offsetY) / pxPerInch,
                        width: (maxX - minX) / pxPerInch,
                        height: (maxY - minY) / pxPerInch
                    };
                    validation = validateTextBounds(textBoundsInches, geometry.safeArea);
                }
                const isAutoSizing = sameSizeMode.value === 'auto';
                if (!validation.fits && !isAutoSizing) {
                    const es = getContrastErrorStroke(bgColor);
                    safeRect.setAttribute('stroke', es.stroke);
                    safeRect.setAttribute('stroke-width', String(es.strokeWidth));
                    safeRect.setAttribute('stroke-dasharray', es.strokeDasharray);
                    safeRect.setAttribute('stroke-opacity', String(es.strokeOpacity));
                    previewWarning.classList.add('show');
                    previewWarning.textContent = validation.message;
                } else {
                    previewWarning.classList.remove('show');
                    previewWarning.textContent = '';
                }
                designPreviewMeta.innerHTML = esc('Previewing Sign ' + active.index) + ' · ' + esc(shapeValue) + ' · ' + esc(
                    colorLabel(active.color || 'black_white')) + '<br>' + esc(active.sizeLabel || (formatThreeDecimals(
                        heightIn) + '" × ' + formatThreeDecimals(widthIn) + '"')) + ' · ' + esc(effectiveHoles) + ' · Qty ' +
                    esc(String(active.qty));
            }

            function updateLiveEstimate() {
                const data = Object.fromEntries(new FormData(form).entries());
                if (sameSizeMode.value === 'auto') applyAutomaticTagSizing();
                const signData = getSignData();
                lineCountInput.value = String(signData.reduce((max, tag) => Math.max(max, tag.lineCount), 1));
                if (!signData.length) {
                    setSummaryDefaults();
                    renderDesignPreview();
                    return;
                }
                const result = calculateQuote(data);
                updateSummary(data, result);
                renderDesignPreview();
            }

            function queueLiveEstimateUpdate() {
                if (updateQueued) return;
                updateQueued = true;
                requestAnimationFrame(() => {
                    updateQueued = false;
                    updateLiveEstimate();
                });
            }

            function validateQuoteSubmission(data) {
                const signData = getSignData();
                if (!data.customerName || !String(data.customerName).trim()) return 'Please enter your name.';
                if (!data.email || !String(data.email).trim()) return 'Please enter your email address.';
                if (!signData.length) return 'Please add at least one sign before generating a quote.';
                const missingSize = (sameSizeMode.value === 'custom' || sameSizeMode.value === 'auto') ? signData.some(
                    tag =>
                        Number(tag.width || 0) <= 0 || Number(tag.height || 0) <= 0) : Number(data.widthIn || 0) <= 0 || (
                            getShapeSizingMode() === 'free' && Number(data.heightIn || 0) <= 0);
                if (missingSize) return 'Please enter a valid tag size before generating a quote.';
                if (previewWarning.classList.contains('show') && sameSizeMode.value !== 'auto') return previewWarning
                    .textContent || 'Please fix the preview warning before generating a quote.';
                return '';
            }

            function getSafeQuoteField(value, fallback = '—') {
                if (value === null || value === undefined || value === '') return fallback;
                return value;
            }

            function closeQuoteModal() {
                quoteModalBackdrop.classList.remove('show');
                quoteModalBackdrop.setAttribute('aria-hidden', 'true');
            }

            function closeQuoteLoading() {
                if (quoteLoadingTimer) {
                    clearTimeout(quoteLoadingTimer);
                    quoteLoadingTimer = null;
                }
                quoteLoadingBackdrop.classList.remove('show');
                quoteLoadingBackdrop.setAttribute('aria-hidden', 'true');
            }

            function openQuoteLoading() {
                quoteLoadingBackdrop.classList.add('show');
                quoteLoadingBackdrop.setAttribute('aria-hidden', 'false');
            }

            function openQuoteModal(payload) {
                const result = payload && payload.result ? payload.result : {},
                    data = payload && payload.data ? payload.data : {};
                const items = Array.isArray(result.quoteItems) ? result.quoteItems : [];
                quoteModalTotal.textContent = currency(result.subtotal || 0);
                quoteModalLeadTime.textContent = 'Product total only';
                const quoteModalJobName = document.getElementById('quoteModalJobName');
                if (quoteModalJobName) {
                    const jn = String(data.jobName || '').trim();
                    quoteModalJobName.textContent = jn ? 'Job: ' + jn : '';
                    quoteModalJobName.style.display = jn ? 'block' : 'none';
                }
                quoteModalMinimumNote.classList.toggle('hidden', !result.minimumApplied);
                quoteModalMinimumNote.textContent = 'Minimum order applied ($' + getSafeQuoteField(result.minimumOrder,
                    25) + ')';
                const quoteColorValues = (result.signData || []).map(tag => tag.color || 'black_white');
                const quoteHasMixed = quoteColorValues.length > 0 && !quoteColorValues.every(v => v === quoteColorValues[
                    0]);
                const quoteColorLabel = quoteHasMixed ? 'Mixed' : colorLabel(quoteColorValues[0] || 'black_white');
                const jobNameDisplay = getSafeQuoteField(data.jobName);
                const jobNameRowHtml = '<div class="quote-line" id="quoteJobNameRow">' +
                    '<span>Job name</span>' +
                    '<span style="position:relative; display:inline-flex; align-items:center; justify-content:flex-end;">' +
                    '<strong id="quoteJobNameDisplay" title="Double-click to rename" style="cursor:text; border-bottom:1px dashed #ccc;">' +
                    esc(jobNameDisplay) + '</strong>' +
                    '<input id="quoteJobNameInput" type="text" maxlength="80" placeholder="Enter job name…"' +
                    ' style="display:none; font-size:14px; font-weight:700; border:none; border-bottom:2px solid var(--brand); outline:none; background:transparent; text-align:right; min-width:140px; font-family:inherit; color:var(--ink); padding:0;" />' +
                    '</span>' +
                    '</div>';
                quoteModalSummary.innerHTML = jobNameRowHtml + [
                    ['Subtotal', currency(result.rawSubtotal || 0)],
                    ['Adjusted subtotal', currency(result.subtotal || 0)],
                    ['Final total', currency(result.subtotal || 0)],
                    ['Pieces', String(result.totalPieces || 0)],
                    ['Material', materialLabel(data.material)],
                    ['Color', quoteColorLabel],
                    ['Shape', getSafeQuoteField(data.shape)],
                    ['Holes', getSafeQuoteField(data.holes)]
                ].map(pair => '<div class="quote-line"><span>' + esc(pair[0]) + '</span><strong>' + esc(String(pair[
                    1])) + '</strong></div>').join('');

                // Wire up double-click inline edit for job name in quote modal
                (function () {
                    const nameEl = document.getElementById('quoteJobNameDisplay');
                    const inputEl = document.getElementById('quoteJobNameInput');
                    const formEl = document.getElementById('jobName');
                    const qlJNEl = document.getElementById('quoteModalJobName');
                    if (!nameEl || !inputEl) return;
                    let committing = false;

                    function openEdit() {
                        const current = formEl ? formEl.value.trim() : '';
                        inputEl.value = current;
                        nameEl.style.display = 'none';
                        inputEl.style.display = 'inline-block';
                        inputEl.focus();
                        inputEl.select();
                    }

                    function commitEdit() {
                        if (committing) return;
                        committing = true;
                        const val = inputEl.value.trim();
                        if (formEl) {
                            formEl.value = val;
                            formEl.dispatchEvent(new Event('input', {
                                bubbles: true
                            }));
                        }
                        if (latestQuotePayload && latestQuotePayload.data) latestQuotePayload.data.jobName = val;
                        nameEl.textContent = val || '—';
                        nameEl.style.display = '';
                        inputEl.style.display = 'none';
                        if (qlJNEl) {
                            qlJNEl.textContent = val ? 'Job: ' + val : '';
                            qlJNEl.style.display = val ? 'block' : 'none';
                        }
                        committing = false;
                    }

                    function cancelEdit() {
                        nameEl.style.display = '';
                        inputEl.style.display = 'none';
                    }
                    nameEl.addEventListener('dblclick', openEdit);
                    inputEl.addEventListener('keydown', e => {
                        if (e.key === 'Enter') {
                            e.preventDefault();
                            commitEdit();
                        }
                        if (e.key === 'Escape') {
                            e.preventDefault();
                            cancelEdit();
                        }
                    });
                    inputEl.addEventListener('blur', () => {
                        setTimeout(commitEdit, 100);
                    });
                })();
                quoteModalItems.innerHTML = items.length ? items.map((item, index) => {
                    const tag = item && item.tag ? item.tag : {},
                        calc = item && item.calc ? item.calc : {};
                    return '<div class="quote-item"><div class="quote-item-title">' + esc('Sign ' + (tag
                        .index || index + 1)) + '</div><div class="quote-item-meta">' + esc(tag.sizeLabel || (
                            formatThreeDecimals(calc.heightIn || 0) + '" × ' + formatThreeDecimals(calc
                                .widthIn || 0) + '"')) + ' · Qty ' + esc(String(tag.qty || 1)) +
                        '</div><div class="quote-item-meta">' + esc((tag.lines || []).map(l => l.text).filter(
                            Boolean).join(' / ') || 'No text entered') +
                        '</div><div class="quote-line"><span>Item total</span><strong>' + esc(currency(calc
                            .subtotal || 0)) + '</strong></div></div>';
                }).join('') : '<div class="helper-text">No sign items were available for this quote.</div>';
                quoteModalBackdrop.classList.add('show');
                quoteModalBackdrop.setAttribute('aria-hidden', 'false');
            }

            function syncHoleSizeOptions() {
                const quantityEl = getEl('holes'),
                    sizeEl = getEl('holeSize');
                if (!quantityEl || !sizeEl) return;
                const quantity = quantityEl.value || 'No holes';
                if (quantity === 'No holes') {
                    sizeEl.innerHTML = '<option value="N/A">N/A</option>';
                    sizeEl.disabled = true;
                    return;
                }
                if (quantity === 'Cable tie slots') {
                    sizeEl.innerHTML = '<option value="3/16 x 1/4" selected>3/16 x 1/4</option>';
                    sizeEl.disabled = false;
                    return;
                }
                const previous = (sizeEl.value === 'N/A') ? '1/8' : sizeEl.value;
                sizeEl.innerHTML = ['1/8', '3/16', '1/4'].map(o => '<option value="' + o + '"' + (o === previous ? ' selected' :
                    '') + '>' + o + '</option>').join('');
                if (!['1/8', '3/16', '1/4'].some(o => o === sizeEl.value)) sizeEl.value = '1/8';
                sizeEl.disabled = false;
            }

            // ── Auto-condense: uses renderDesignPreview to detect overflow — exact same logic as the red warning ──
            const autoCondenseBtn = getEl('autoCondenseBtn');
            if (autoCondenseBtn) {
                autoCondenseBtn.addEventListener('click', () => {
                    const entries = Array.from(document.querySelectorAll('.sign-entry'));
                    const originalIndex = selectedPreviewIndex;
                    let fixed = 0;

                    entries.forEach((entry, idx) => {
                        const txt = entry.querySelector('.sign-text') ? entry.querySelector('.sign-text')
                            .value : '';
                        if (!txt.trim()) return; // skip empty tags
                        if (entry.dataset.condense === 'yes') return; // already condensed

                        // Temporarily render this tag's preview — this runs validateTextBounds internally
                        selectedPreviewIndex = idx;
                        renderDesignPreview();

                        // previewWarning.classList.contains('show') means text overflows safe area
                        if (previewWarning.classList.contains('show')) {
                            entry.dataset.condense = 'yes';
                            const cndSel = entry.querySelector('.tag-condense-select');
                            if (cndSel) cndSel.value = 'yes';
                            fixed++;
                        }
                    });

                    // Restore original preview selection
                    selectedPreviewIndex = originalIndex;
                    previewSignSelect.value = String(originalIndex);
                    queueLiveEstimateUpdate();

                    const msg = fixed > 0 ?
                        `\u2713 Condensed ${fixed} overflowing tag${fixed === 1 ? '' : 's'}.` :
                        'No overflowing tags found \u2014 all text fits!';
                    autoCondenseBtn.textContent = msg;
                    setTimeout(() => {
                        autoCondenseBtn.textContent = '\u26A1 Auto-condense overflowing tags';
                    }, 3000);
                });
            }

            // ── Global settings — auto-push to all tags on change ──
            const globalColorSelect = getEl('globalColor');
            if (globalColorSelect) {
                globalColorSelect.addEventListener('change', () => {
                    document.querySelectorAll('.sign-entry').forEach(entry => {
                        entry.dataset.colorValue = globalColorSelect.value;
                        const colorSel = entry.querySelector('.tag-color-select');
                        if (colorSel) colorSel.value = globalColorSelect.value;
                    });
                    queueLiveEstimateUpdate();
                });
            }

            const globalHolesSelect = getEl('holes');
            const globalHoleSizeSelect = getEl('holeSize');

            function pushGlobalHolesToTags() {
                const globalHoles = globalHolesSelect ? globalHolesSelect.value : 'No holes';
                const globalHoleSize = globalHoleSizeSelect ? globalHoleSizeSelect.value : '1/8';
                document.querySelectorAll('.sign-entry').forEach(entry => {
                    entry.dataset.holeQty = globalHoles;
                    entry.dataset.holeSize = globalHoleSize;
                    const holesSel = entry.querySelector('.tag-holes-select');
                    if (holesSel) holesSel.value = globalHoles;
                    syncTagHoleSizeFromHoles(entry);
                    const hsEl = entry.querySelector('.tag-holesize-select');
                    if (hsEl && globalHoles !== 'Cable tie slots' && globalHoles !== 'No holes') hsEl.value =
                        globalHoleSize;
                });
            }
            if (globalHolesSelect) globalHolesSelect.addEventListener('change', () => {
                syncHoleSizeOptions();
                pushGlobalHolesToTags();
                queueLiveEstimateUpdate();
            });
            if (globalHoleSizeSelect) globalHoleSizeSelect.addEventListener('change', () => {
                pushGlobalHolesToTags();
                queueLiveEstimateUpdate();
            });

            const globalCornerRadiusSelect = getEl('globalCornerRadius');
            if (globalCornerRadiusSelect) {
                globalCornerRadiusSelect.addEventListener('change', () => {
                    const val = globalCornerRadiusSelect.value;
                    document.querySelectorAll('.sign-entry').forEach(entry => {
                        entry.dataset.cornerRadius = val;
                        const radSel = entry.querySelector('.tag-radius-select');
                        if (radSel) radSel.value = val;
                    });
                    queueLiveEstimateUpdate();
                });
            }

            addSignBtn.addEventListener('click', addSignBox);

            function handleGenerateQuote(event) {
                if (event) event.preventDefault();
                try {
                    const data = Object.fromEntries(new FormData(form).entries());
                    const validationMessage = validateQuoteSubmission(data);
                    if (validationMessage) {
                        window.alert(validationMessage);
                        closeQuoteLoading();
                        closeQuoteModal();
                        return;
                    }
                    const result = calculateQuote(data);
                    latestQuotePayload = {
                        data,
                        result
                    };
                    // Auto-save draft immediately on quote generation (logged-in users only)
                    saveDraft();
                    closeQuoteModal();
                    openQuoteLoading();
                    quoteLoadingTimer = window.setTimeout(() => {
                        closeQuoteLoading();
                        openQuoteModal(latestQuotePayload);
                    }, 850);
                } catch (error) {
                    console.error('generate-quote error', error);
                    window.alert('Quote generation hit an error. Check the console for details.');
                    closeQuoteLoading();
                    closeQuoteModal();
                }
            }
            if (generateBtn) generateBtn.addEventListener('click', event => handleGenerateQuote(event));

            resetBtn.addEventListener('click', () => {
                closeQuoteLoading();
                closeQuoteModal();
                form.reset();
                getEl('material').value = 'plastic';
                getEl('globalColor').value = 'black_white';
                getEl('holes').value = 'No holes';
                getEl('shape').value = 'Rectangle';
                getEl('fontFamily').value = 'Arial, Helvetica, sans-serif';
                getEl('widthIn').value = '3.000';
                getEl('heightIn').value = '1.000';
                sameSizeMode.value = 'same';
                signStack.innerHTML = '';
                addSignBox();
                selectedPreviewIndex = 0;
                setSummaryDefaults();
                rebuildPreviewSelector();
                syncSizeModeUI();
                syncHoleSizeOptions();
                renderDesignPreview();
            });

            previewSignSelect.addEventListener('change', () => {
                selectedPreviewIndex = Number(previewSignSelect.value || 0);
                renderDesignPreview();
            });
            form.addEventListener('input', queueLiveEstimateUpdate);
            form.addEventListener('change', queueLiveEstimateUpdate);
            form.addEventListener('keyup', queueLiveEstimateUpdate);

            form.addEventListener('input', scheduleDraftSave);
            form.addEventListener('change', scheduleDraftSave);

            sameSizeMode.addEventListener('change', () => {
                if (sameSizeMode.value === 'custom') {
                    document.querySelectorAll('.sign-entry').forEach(entry => {
                        const wi = entry.querySelector('.sign-width'),
                            hi = entry.querySelector('.sign-height');
                        if (wi && !wi.value) wi.value = getEl('widthIn').value || '3.000';
                        if (hi && !hi.value) hi.value = getEl('heightIn').value || '1.000';
                    });
                }
                if (sameSizeMode.value === 'auto') {
                    document.querySelectorAll('.sign-entry').forEach(entry => {
                        entry.dataset.manualSizeOverride = 'false';
                    });
                    applyAutomaticTagSizing(true);
                }
                syncSizeModeUI();
                queueLiveEstimateUpdate();
            });

            // holes and holeSize are handled by dedicated listeners above (pushGlobalHolesToTags)
            ['material', 'widthIn', 'heightIn', 'shape', 'fontFamily'].forEach(fieldId => {
                const el = getEl(fieldId);
                if (!el) return;
                const handler = e => {
                    if (e && e.target && e.target.id === 'shape') {
                        const shapeVal = e.target.value;
                        if (shapeVal === 'Rectangle') {
                            getEl('widthIn').value = '3.000';
                            getEl('heightIn').value = '1.000';
                            document.querySelectorAll('.sign-entry').forEach(entry => {
                                const w = entry.querySelector('.sign-width'),
                                    h = entry.querySelector('.sign-height');
                                if (w) w.value = '3.000';
                                if (h) h.value = '1.000';
                                entry.dataset.manualSizeOverride = 'false';
                            });
                        }
                    }
                    if (sameSizeMode.value === 'auto') applyAutomaticTagSizing();
                    updateSizeFieldPresentation();
                    queueLiveEstimateUpdate();
                };
                el.addEventListener('input', handler);
                el.addEventListener('change', handler);
                el.addEventListener('keyup', handler);
            });
            form.addEventListener('submit', handleGenerateQuote);

            if (quoteModalClose) quoteModalClose.addEventListener('click', closeQuoteModal);
            if (quoteModalCancel) quoteModalCancel.addEventListener('click', closeQuoteModal);
            if (quoteModalBackdrop) quoteModalBackdrop.addEventListener('click', e => {
                if (e.target === quoteModalBackdrop) closeQuoteModal();
            });

            if (downloadQuoteBtn) downloadQuoteBtn.addEventListener('click', () => {
                const payload = latestQuotePayload;
                if (!payload) return;
                const result = payload.result || {},
                    data = payload.data || {};
                const quoteItems = Array.isArray(result.quoteItems) ? result.quoteItems : [];
                const signData = Array.isArray(result.signData) ? result.signData : [];

                function q(s) {
                    return String(s || '').replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
                        .replace(/"/g, '&quot;');
                }

                function cur(n) {
                    return '$' + Number(n || 0).toFixed(2);
                }

                // ── Color dot hex ──
                const colorHexMap = {
                    'black_white': '#000000',
                    'white_black': '#ffffff',
                    'white_red': '#ffffff',
                    'yellow_black': '#F5E800',
                    'yellow_red': '#F5E800',
                    'red_white': '#ef1111',
                    'green_white': '#0b8f10',
                    'blue_white': '#004F86',
                    'gray_white': '#4F565B',
                    'brown_white': '#523D2A',
                    'orange_white': '#B84717',
                    'orange_black': '#D24912',
                    'purple_white': '#5b34b1'
                };

                // ── Build tag rows — one row per unique sign ──
                const tagRows = signData.map((tag, i) => {
                    const dotColor = colorHexMap[tag.color || 'black_white'] || '#000000';
                    const border = (tag.color || '').startsWith('white') ? 'border:1px solid #d1d5db;' : '';
                    const clabel = q(colorLabel(tag.color || 'black_white'));
                    const content = (tag.lines || []).map(l => q(l.text || '')).filter(Boolean).join(
                        ' / ') || '—';
                    const unitPrice = (Number(tag.width || 0) * Number(tag.height || 0) * 0.75);
                    const subtotal = unitPrice * Number(tag.qty || 1);
                    return `<tr>
        <td>${i + 1}</td>
        <td>${q(String(tag.qty || 1))}</td>
        <td>${q(tag.sizeLabel || (tag.height + '" × ' + tag.width + '"'))}</td>
        <td><span class="color-pill"><span class="color-dot" style="background:${dotColor};${border}"></span>${clabel}</span></td>
        <td>${q(tag.holes || 'None')}</td>
        <td>${content}</td>
        <td style="text-align:right;">${cur(unitPrice)}</td>
        <td style="text-align:right;">${cur(subtotal)}</td>
      </tr>`;
                }).join('');

                const jobName = q(data.jobName || '');
                const custName = q(data.customerName || '—');
                const custEmail = q(data.email || '—');
                const quoteDate = new Date().toLocaleDateString('en-US', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });
                const quoteNum = 'Q-' + Date.now().toString(36).toUpperCase();
                const totalPcs = result.totalPieces || 0;
                const fontName = q((data.fontFamily || 'Arial').split(',')[0].replace(/'/g, '').trim());
                const shapeName = q(data.shape || 'Rectangle');
                const minNote = result.minimumApplied ?
                    `<div class="total-row"><span>Minimum applied</span><strong>${cur(result.minimumOrder || 25)}</strong></div>` :
                    '';

                const html = `<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Quote ${quoteNum} — Accurate Signs &amp; Engraving</title>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  :root{--brand:#640100;--accent:#b87333;--ink:#111827;--muted:#6b7280;--line:#e5e7eb;--bg:#f9f8f6;--white:#ffffff;}
  *{box-sizing:border-box;margin:0;padding:0;}
  body{font-family:'DM Sans',sans-serif;background:var(--bg);color:var(--ink);font-size:14px;line-height:1.6;}
  #toolbar{background:var(--brand);color:#fff;padding:14px 32px;display:flex;justify-content:space-between;align-items:center;position:sticky;top:0;z-index:100;gap:16px;}
  #toolbar p{font-size:14px;font-weight:600;margin:0;opacity:0.9;}
  .tb-btn{background:#fff;color:var(--brand);border:none;border-radius:8px;padding:9px 20px;font-size:13px;font-weight:700;cursor:pointer;font-family:inherit;}
  .tb-btn:hover{background:#f5f5f5;}
  .page{max-width:780px;margin:36px auto;padding:0 20px 60px;}
  .quote-header{background:var(--white);border-radius:16px;padding:32px 36px;margin-bottom:16px;border:1px solid var(--line);display:flex;justify-content:space-between;align-items:flex-start;gap:24px;}
  .brand-name{font-size:20px;font-weight:600;color:var(--brand);letter-spacing:-0.01em;}
  .brand-sub{font-size:11px;font-weight:500;letter-spacing:0.1em;text-transform:uppercase;color:var(--muted);margin-top:2px;}
  .quote-meta{text-align:right;}
  .quote-num{font-size:13px;color:var(--muted);}
  .quote-badge{display:inline-block;background:#fff7ed;border:1px solid #fed7aa;color:#c2410c;border-radius:999px;padding:4px 12px;font-size:11px;font-weight:700;letter-spacing:0.06em;text-transform:uppercase;margin-top:8px;}
  .section{background:var(--white);border-radius:16px;border:1px solid var(--line);padding:24px 28px;margin-bottom:16px;}
  .section-title{font-size:10px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:var(--brand);margin-bottom:16px;}
  .info-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px 24px;}
  .info-item label{display:block;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:0.07em;color:var(--muted);margin-bottom:3px;}
  .info-item span{font-size:13px;font-weight:500;color:var(--ink);}
  table{width:100%;border-collapse:collapse;font-size:12.5px;}
  thead tr{border-bottom:2px solid var(--line);}
  th{text-align:left;padding:8px 10px;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.07em;color:var(--muted);}
  td{padding:9px 10px;border-bottom:1px solid #f3f4f6;vertical-align:middle;}
  tr:last-child td{border-bottom:none;}
  tr:nth-child(even) td{background:#fafafa;}
  .color-pill{display:inline-flex;align-items:center;gap:5px;font-size:11px;}
  .color-dot{width:10px;height:10px;border-radius:50%;flex-shrink:0;}
  .totals{display:flex;flex-direction:column;gap:0;max-width:320px;margin-left:auto;}
  .total-row{display:flex;justify-content:space-between;align-items:baseline;padding:8px 0;font-size:13.5px;border-bottom:1px dashed var(--line);gap:16px;}
  .total-row:last-child{border-bottom:none;font-size:17px;font-weight:700;color:var(--brand);padding-top:12px;}
  .total-row span:first-child{color:var(--muted);font-weight:400;}
  .total-row strong{font-weight:600;}
  .quote-note{background:#fffbeb;border:1px solid #fde68a;border-radius:12px;padding:14px 18px;font-size:12.5px;color:#92400e;line-height:1.55;margin-bottom:16px;}
  .quote-note strong{font-weight:600;}
  @media print{#toolbar{display:none;}body{background:#fff;}.page{margin:0;padding:16px;}@page{size:letter;margin:0.4in;}}
</style>
</head>
<body>
<div id="toolbar">
  <p>Accurate Signs &amp; Engraving &mdash; Instant Quote</p>
  <button class="tb-btn" onclick="window.print()">&#x2193; Download / Print</button>
</div>
<div class="page">
  <div class="quote-header">
    <div>
      <div class="brand-name">Accurate Signs &amp; Engraving</div>
      <div class="brand-sub">Instant Quote</div>
    </div>
    <div class="quote-meta">
      <div class="quote-num">Quote #${quoteNum}</div>
      <div class="quote-num" style="margin-top:4px;font-size:12px;">${quoteDate}</div>
      <div class="quote-badge">Valid 30 days</div>
    </div>
  </div>

  <div class="section">
    <p class="section-title">Customer Information</p>
    <div class="info-grid">
      <div class="info-item"><label>Name</label><span>${custName}</span></div>
      <div class="info-item"><label>Email</label><span>${custEmail}</span></div>
      ${jobName ? `<div class="info-item"><label>Job Name</label><span>${jobName}</span></div>` : ''}
      <div class="info-item"><label>Total Pieces</label><span>${totalPcs}</span></div>
      <div class="info-item"><label>Material</label><span>Laser-engraved plastic</span></div>
      <div class="info-item"><label>Font</label><span>${fontName}</span></div>
      <div class="info-item"><label>Shape</label><span>${shapeName}</span></div>
    </div>
  </div>

  <div class="section">
    <p class="section-title">Tag Breakdown — ${totalPcs} total pieces</p>
    <table>
      <thead>
        <tr>
          <th>#</th><th>Qty</th><th>Size (H × W)</th><th>Color</th>
          <th>Holes</th><th>Text Content</th>
          <th style="text-align:right;">Unit Price</th>
          <th style="text-align:right;">Subtotal</th>
        </tr>
      </thead>
      <tbody>${tagRows}</tbody>
    </table>
  </div>

  <div class="section">
    <p class="section-title">Pricing Summary</p>
    <div class="totals">
      <div class="total-row"><span>Product subtotal</span><strong>${cur(result.rawSubtotal || 0)}</strong></div>
      ${minNote}
      <div class="total-row"><span>Product total</span><strong>${cur(result.subtotal || 0)}</strong></div>
      <div class="total-row"><span>Grand Total</span><strong>${cur(result.subtotal || 0)}</strong></div>
    </div>
  </div>

  <div class="quote-note">
    <strong>This is an instant quote, not a confirmed order.</strong> Pricing is based on $0.75/sq inch with a $25 minimum. To place your order, return to the portal and click <em>Continue to Order</em>. This quote is valid for 30 days from the date above.
  </div>
</div>
</body>
</html>`;

                const win = window.open('', '_blank', 'width=900,height=800');
                if (!win) {
                    window.alert('Popup blocked — please allow popups and try again.');
                    return;
                }
                win.document.open();
                win.document.write(html);
                win.document.close();
            });
            if (emailQuoteBtn) emailQuoteBtn.addEventListener('click', () => {
                emailInline.classList.toggle('hidden');
            });
            if (sendQuoteEmailBtn) sendQuoteEmailBtn.addEventListener('click', () => {
                const email = quoteEmailInput.value.trim();
                if (!email) {
                    window.alert('Please enter an email');
                    return;
                }
                window.alert('Quote ready to be emailed (backend not connected yet).');
            });

            // ── Order Modal ──
            const orderModal = document.getElementById('orderModalBackdrop'),
                orderClose = document.getElementById('orderModalClose'),
                orderBackToQuote = document.getElementById('orderBackToQuote'),
                continueToProofBtn = document.getElementById('continueToProofBtn'),
                placeOrderBtn = document.getElementById('placeOrderBtn'),
                orderInfoStep = document.getElementById('orderInfoStep'),
                proofReviewStep = document.getElementById('proofReviewStep'),
                proofSheetContainer = document.getElementById('proofSheetContainer'),
                proofSummaryBlock = document.getElementById('proofSummaryBlock'),
                proofZoomRange = document.getElementById('proofZoomRange'),
                proofZoomValue = document.getElementById('proofZoomValue'),
                downloadProofBtn = document.getElementById('downloadProofBtn'),
                proofApprovalCheckbox = document.getElementById('proofApprovalCheckbox'),
                proofValidationMessage = document.getElementById('proofValidationMessage'),
                backToOrderInfoBtn = document.getElementById('backToOrderInfoBtn');
            const orderName = document.getElementById('orderName'),
                orderCompany = document.getElementById('orderCompany'),
                orderEmail = document.getElementById('orderEmail'),
                orderPhone = document.getElementById('orderPhone'),
                orderShipping = document.getElementById('orderShipping'),
                orderTotals = document.getElementById('orderTotals'),
                orderAddress = document.getElementById('orderAddress'),
                orderCity = document.getElementById('orderCity'),
                orderState = document.getElementById('orderState'),
                orderZip = document.getElementById('orderZip'),
                paymentCardholder = document.getElementById('paymentCardholder'),
                paymentCardNumber = document.getElementById('paymentCardNumber'),
                paymentExpiry = document.getElementById('paymentExpiry'),
                paymentCvv = document.getElementById('paymentCvv'),
                paymentBillingZip = document.getElementById('paymentBillingZip'),
                orderValidationMessage = document.getElementById('orderValidationMessage'),
                billingSameAsShipping = document.getElementById('billingSameAsShipping'),
                billingAddressFields = document.getElementById('billingAddressFields'),
                billingAddress = document.getElementById('billingAddress'),
                billingCity = document.getElementById('billingCity'),
                billingState = document.getElementById('billingState'),
                billingZip = document.getElementById('billingZip');

            function closeOrderModal() {
                if (!orderModal) return;
                orderModal.style.display = 'none';
                orderModal.setAttribute('aria-hidden', 'true');
                if (orderValidationMessage) {
                    orderValidationMessage.textContent = '';
                    orderValidationMessage.classList.remove('show');
                }
                if (proofValidationMessage) {
                    proofValidationMessage.textContent = '';
                    proofValidationMessage.classList.remove('show');
                }
                if (proofApprovalCheckbox) proofApprovalCheckbox.checked = false;
                if (placeOrderBtn) placeOrderBtn.disabled = true;
                if (orderInfoStep) orderInfoStep.classList.remove('hidden');
                if (proofReviewStep) proofReviewStep.classList.add('hidden');
            }

            function setOrderValidationMessage(msg) {
                if (!orderValidationMessage) return;
                orderValidationMessage.textContent = msg || '';
                orderValidationMessage.classList.toggle('show', Boolean(msg));
            }

            function validateOrderStep() {
                const missingAddress = [orderAddress, orderCity, orderState, orderZip].some(f => !f || !String(f.value ||
                    '').trim());
                if (missingAddress) return 'Please enter your shipping address.';
                const usingSameBilling = !billingSameAsShipping || billingSameAsShipping.checked;
                if (!usingSameBilling) {
                    const mb = [billingAddress, billingCity, billingState, billingZip].some(f => !f || !String(f.value ||
                        '').trim());
                    if (mb) return 'Please enter your billing address.';
                }
                const mp = [paymentCardholder, paymentCardNumber, paymentExpiry, paymentCvv, paymentBillingZip].some(f => !
                    f || !String(f.value || '').trim());
                if (mp) return 'Please complete the payment information.';
                return '';
            }

            function updatePlaceOrderState() {
                const vm = validateOrderStep();
                if (continueToProofBtn) continueToProofBtn.disabled = Boolean(vm);
                if (!vm) setOrderValidationMessage('');
            }

            function updateProofApprovalState() {
                const approved = Boolean(proofApprovalCheckbox && proofApprovalCheckbox.checked);
                if (placeOrderBtn) placeOrderBtn.disabled = !approved;
                if (approved && proofValidationMessage) {
                    proofValidationMessage.textContent = '';
                    proofValidationMessage.classList.remove('show');
                }
            }

            function buildProofLayoutPages(payload) {
                const result = payload?.result || {},
                    data = payload?.data || {};
                const signData = Array.isArray(result.signData) ? result.signData : [];

                // ── Sheet constants — mirror the laser file layout ──
                const sheetWidthIn = 24,
                    sheetHeightIn = 12;
                const leftBias = 0.25; // left bias — matches laser LEFT_BIAS
                const innerMargin = 0.25; // right/bottom margin — matches laser INNER_MARGIN
                const gapIn = 0.25; // tag-to-tag gap — matches laser GAP
                const tagStartY = 1.65; // y below proof header text (inches)
                const bottomMargin = 0.4; // space for footer
                const maxColH = sheetHeightIn - tagStartY - bottomMargin;
                const maxAreaW = sheetWidthIn - leftBias - innerMargin;

                // ── Group tags by color (same sort as laser file) ──
                function groupKey(tag) {
                    const color = tag.color || 'black_white';
                    const w = Number(tag.width || 0).toFixed(3);
                    const h = Number(tag.height || 0).toFixed(3);
                    const lines = Array.isArray(tag.lines) ? tag.lines.filter(l => String(l.text || '').trim()).length : 0;
                    const holes = (tag.holes && tag.holes !== 'No holes') ? 'holes' : 'no-holes';
                    const radius = (tag.cornerRadius === 'no') ? 'square' : 'rounded';
                    return color + '|' + w + 'x' + h + '|' + lines + 'lines|' + holes + '|' + radius;
                }

                const colorOrder = ['black_white', 'white_black', 'white_red', 'yellow_black', 'yellow_red', 'red_white',
                    'green_white', 'blue_white', 'gray_white', 'brown_white', 'orange_white', 'orange_black',
                    'purple_white'
                ];
                const sortedSignData = [...signData].sort((a, b) => {
                    const ka = groupKey(a),
                        kb = groupKey(b);
                    if (ka === kb) return 0;
                    const ca = colorOrder.indexOf(a.color || 'black_white'),
                        cb = colorOrder.indexOf(b.color || 'black_white');
                    if (ca !== cb) return ca - cb;
                    const ha = Number(a.height || 0),
                        hb = Number(b.height || 0);
                    if (ha !== hb) return ha - hb;
                    const wa = Number(a.width || 0),
                        wb = Number(b.width || 0);
                    if (wa !== wb) return wa - wb;
                    const la = Array.isArray(a.lines) ? a.lines.filter(l => String(l.text || '').trim()).length : 0;
                    const lb = Array.isArray(b.lines) ? b.lines.filter(l => String(l.text || '').trim()).length : 0;
                    if (la !== lb) return la - lb;
                    const hoa = (a.holes && a.holes !== 'No holes') ? 1 : 0, hob = (b.holes && b.holes !== 'No holes') ? 1 : 0;
                    return hoa - hob;
                });

                // Expand by qty — preserve original entry order for proof and production sheet
                // (color sorting is only needed for the laser file, which groups by color for cutting)
                const placements = [];
                signData.forEach(tag => {
                    const repeat = Math.max(1, Number(tag.qty || 1));
                    for (let i = 0; i < repeat; i++) placements.push({
                        tag,
                        key: groupKey(tag)
                    });
                });

                // ── Column-first packing (Sign 1 top-left, Sign 2 below, etc.) ──
                const pages = [];
                let currentPage = [],
                    colX = leftBias,
                    colY = tagStartY,
                    colW = 0;
                let currentKey = placements.length ? placements[0].key : null;

                placements.forEach((placement, index) => {
                    const tag = placement.tag;
                    const tagWidth = Math.max(0.25, Number(tag.width || 0.25));
                    const tagHeight = Math.max(0.25, Number(tag.height || 0.25));
                    const keyChanged = placement.key !== currentKey;

                    // New color group → new page
                    if (keyChanged && currentPage.length) {
                        pages.push(currentPage);
                        currentPage = [];
                        colX = leftBias;
                        colY = tagStartY;
                        colW = 0;
                        currentKey = placement.key;
                    }

                    // Column full → start new column
                    if (colY > tagStartY && colY + tagHeight > sheetHeightIn - bottomMargin + 0.001) {
                        colX += colW + gapIn;
                        colY = tagStartY;
                        colW = 0;
                    }

                    // Page full → new page
                    if (currentPage.length > 0 && colX + tagWidth > sheetWidthIn - innerMargin + 0.001) {
                        pages.push(currentPage);
                        currentPage = [];
                        colX = leftBias;
                        colY = tagStartY;
                        colW = 0;
                    }

                    currentPage.push({
                        tag,
                        x: colX,
                        y: colY,
                        copyIndex: index + 1
                    });
                    colW = Math.max(colW, tagWidth);
                    colY += tagHeight + gapIn;
                    currentKey = placement.key;
                });

                if (currentPage.length) pages.push(currentPage);

                // Attach group label to each page
                pages.forEach(page => {
                    if (!page.length) return;
                    const t = page[0].tag;
                    const cl = colorLabel(t.color || 'black_white');
                    const w = formatThreeDecimals(Number(t.width || 0));
                    const h = formatThreeDecimals(Number(t.height || 0));
                    const lc = Array.isArray(t.lines) ? t.lines.filter(l => String(l.text || '').trim()).length : 0;
                    const hl = (t.holes && t.holes !== 'No holes') ? ' · ' + t.holes : ' · No holes';
                    const rl = (t.cornerRadius === 'no') ? ' · Square corners' : ' · Rounded corners';
                    page.groupLabel = cl + ' · ' + h + '" × ' + w + '" · ' + lc + ' line' + (lc === 1 ? '' : 's') + hl +
                        rl;
                });

                return {
                    pages,
                    sheetWidthIn,
                    sheetHeightIn,
                    data,
                    result
                };
            }

            function buildTagPreviewFragment(tag, data, targetSvg, options = {}) {
                const colorPairValue = colorPair(tag.color || 'black_white'),
                    bgColor = colorPairValue[0],
                    textColor = colorPairValue[1];
                const shapeValue = data.shape || 'Rectangle',
                    widthIn = Math.max(Number(tag.width || 0) || 3, 0.25),
                    heightIn = Math.max(Number(tag.height || 0) || 1, 0.25);
                const effectiveHoles = tag.holes || 'No holes',
                    effectiveHoleSize = tag.holeSize || '1/8';
                const proofMode = Boolean(options.proofMode);
                const pxPerInch = proofMode ? (options.pxPerInch || 72) : getPreviewScale(options.viewBoxWidth || 420,
                    options.viewBoxHeight || 260, widthIn, heightIn);
                const previewWidth = widthIn * pxPerInch,
                    previewHeight = heightIn * pxPerInch;
                const offsetX = proofMode ? 0 : (options.viewBoxWidth || 420 - previewWidth) / 2,
                    offsetY = proofMode ? 0 : ((options.viewBoxHeight || 260) - previewHeight) / 2;
                const cornerRadiusIn2 = (options.cornerRadius === 'yes') ? 0.125 : 0;
                const radiusValue = cornerRadiusIn2 * pxPerInch;
                const wrapper = createSvgEl('g');
                if (!proofMode) wrapper.appendChild(createSvgEl('rect', {
                    x: offsetX + 5,
                    y: offsetY + 7,
                    width: previewWidth,
                    height: previewHeight,
                    rx: Math.min(radiusValue + 2, 18),
                    fill: 'rgba(15,23,42,0.10)'
                }));
                renderPreviewShape(wrapper, shapeValue, bgColor, radiusValue, previewWidth, previewHeight, offsetX, offsetY);
                const hasHoles = Boolean(effectiveHoles && effectiveHoles !== 'No holes'), selectedHoleSpec = getSelectedHoleSpec(
                    effectiveHoles, effectiveHoleSize, widthIn, heightIn);
                const holeDiameter = selectedHoleSpec && selectedHoleSpec.type === 'round' ? selectedHoleSpec.diameter : (hasHoles ?
                    getAutoHoleDiameter(widthIn, heightIn) : 0);
                const geometry = getTagGeometry({
                    tagWidth: widthIn,
                    tagHeight: heightIn,
                    hasHoles,
                    holeDiameter,
                    holeQuantity: effectiveHoles,
                    holeSizeValue: effectiveHoleSize
                });
                const safeAreaPx = {
                    x: offsetX + inchesToPx(geometry.safeArea.x, pxPerInch),
                    y: offsetY + inchesToPx(geometry.safeArea.y, pxPerInch),
                    width: inchesToPx(geometry.safeArea.width, pxPerInch),
                    height: inchesToPx(geometry.safeArea.height, pxPerInch)
                };
                if (options.showSafeArea) {
                    const ov = createSvgEl('g');
                    ov.appendChild(createSvgEl('rect', {
                        x: safeAreaPx.x,
                        y: safeAreaPx.y,
                        width: safeAreaPx.width,
                        height: safeAreaPx.height,
                        fill: 'none',
                        stroke: getContrastSafeAreaStroke(bgColor),
                        'stroke-dasharray': '4 3',
                        'stroke-width': 1
                    }));
                    renderHoleFeatures(ov, effectiveHoles, effectiveHoleSize, widthIn, heightIn, offsetX, offsetY, pxPerInch,
                        textColor);
                    wrapper.appendChild(ov);
                } else {
                    renderHoleFeatures(wrapper, effectiveHoles, effectiveHoleSize, widthIn, heightIn, offsetX, offsetY,
                        pxPerInch, textColor);
                }
                const defs = createSvgEl('defs'),
                    clipPath = createSvgEl('clipPath', {
                        id: options.clipId || ('tagClip_' + Math.random().toString(36).slice(2))
                    });
                renderPreviewShape(clipPath, shapeValue, '#000001', radiusValue, previewWidth, previewHeight, offsetX, offsetY);
                defs.appendChild(clipPath);
                wrapper.appendChild(defs);
                const safeAreaCenterX = safeAreaPx.x + safeAreaPx.width / 2,
                    safeAreaCenterY = safeAreaPx.y + safeAreaPx.height / 2;
                const align = tag.align || 'center',
                    alignmentPadding = 10;
                let textAnchor = 'middle', textX = safeAreaCenterX;
                if (align === 'left') {
                    textAnchor = 'start';
                    textX = safeAreaPx.x + alignmentPadding;
                } else if (align === 'right') {
                    textAnchor = 'end';
                    textX = safeAreaPx.x + safeAreaPx.width - alignmentPadding;
                }
                const condensed = (tag.condense || 'no') === 'yes',
                    spacingMultiplier = getLineSpacingMultiplier(tag.lineSpacing || 'full');
                const lines = tag.lines && tag.lines.length ? tag.lines : [{
                    text: 'PREVIEW',
                    bold: false,
                    size: '1/4',
                    customSize: ''
                }];
                const portalStageScale = previewWidth / Math.max(widthIn * PORTAL_TAG_PX_PER_IN, 1);
                const renderedLines = lines.map(line => {
                    const requestedHeightIn = parseSizeValueToInches(getEffectiveLineSizeValue(line)) ||
                        BASELINE_LINE_SIZE_IN;
                    const fontSize = proofMode ? Math.max(4, requestedHeightIn * PORTAL_FONT_PX_PER_IN *
                        portalStageScale) : Math.max(7, requestedHeightIn * PORTAL_FONT_PX_PER_IN *
                            portalStageScale);
                    const fontFamily = data.fontFamily || 'Arial, Helvetica, sans-serif';
                    const xMetrics = measureReferenceXMetrics(targetSvg, fontSize, fontFamily, line.bold ? 700 : 400);
                    const lineHeight = Math.max(xMetrics.height * 1.0, xMetrics.height + 2);
                    const interlineGap = Math.max(0, lineHeight * spacingMultiplier * 0.5);
                    return {
                        ...line,
                        fontSize,
                        lineHeight,
                        interlineGap,
                        ascent: xMetrics.ascent,
                        textValue: line.text || ''
                    };
                });
                const totalBlockHeight = renderedLines.length <= 1 ? (renderedLines[0] ? renderedLines[0].lineHeight : 0) :
                    renderedLines.reduce((s, l) => s + l.lineHeight, 0) + renderedLines.slice(0, renderedLines.length - 1)
                        .reduce((s, l) => s + l.interlineGap, 0);
                let currentY = safeAreaCenterY - totalBlockHeight / 2;
                const textGroup = createSvgEl('g');
                wrapper.appendChild(textGroup);
                const renderedTextEls = [];
                renderedLines.forEach((line, index) => {
                    const fontFamily = data.fontFamily || 'Arial, Helvetica, sans-serif';
                    const baselineY = currentY + ((line.lineHeight - line.fontSize) / 2) + line.ascent;
                    const textEl = createSvgEl('text', {
                        x: textX,
                        y: baselineY,
                        'text-anchor': textAnchor,
                        'font-size': line.fontSize,
                        fill: textColor,
                        'font-weight': line.bold ? 700 : 400,
                        'font-family': fontFamily
                    });
                    textEl.textContent = line.textValue;
                    textGroup.appendChild(textEl);
                    renderedTextEls.push({
                        line,
                        textEl,
                        baselineY
                    });
                    currentY += line.lineHeight;
                    if (index < renderedLines.length - 1) currentY += line.interlineGap;
                });
                // Temporarily attach wrapper to targetSvg so getBBox() works (requires live DOM)
                const _measParent = targetSvg || document.body;
                _measParent.appendChild(wrapper);
                let naturalTextWidth = 0;
                renderedTextEls.forEach(item => {
                    try {
                        const box = item.textEl.getBBox();
                        item.naturalBox = box;
                        naturalTextWidth = Math.max(naturalTextWidth, box.width || 0);
                    } catch (_) {
                        item.naturalBox = {
                            x: textX,
                            y: item.baselineY,
                            width: 0,
                            height: item.line.fontSize
                        };
                    }
                });
                _measParent.removeChild(wrapper);
                naturalTextWidth = Math.max(naturalTextWidth, 0.1);
                const condenseRatio = condensed ? Math.min(1, safeAreaPx.width / Math.max(naturalTextWidth, 0.0001)) : 1;
                renderedTextEls.forEach(item => {
                    if (condenseRatio !== 1) item.textEl.setAttribute('transform', 'translate(' + safeAreaCenterX +
                        ',0) scale(' + condenseRatio + ',1) translate(' + (-safeAreaCenterX) + ',0)');
                    else item.textEl.removeAttribute('transform');
                });
                if (!proofMode) {
                    try {
                        const gb = textGroup.getBBox();
                        const tcy = gb.y + gb.height / 2;
                        const vo = safeAreaCenterY - tcy;
                        textGroup.setAttribute('transform', 'translate(0 ' + vo + ')');
                    } catch (_) {
                        textGroup.removeAttribute('transform');
                    }
                }
                return {
                    wrapper,
                    clipId: clipPath.getAttribute('id'),
                    widthIn,
                    heightIn,
                    viewBoxWidth: options.viewBoxWidth || 420,
                    viewBoxHeight: options.viewBoxHeight || 260,
                    previewWidth,
                    previewHeight,
                    offsetX,
                    offsetY
                };
            }

            function renderTagContentToGroup(group, measureSvg, tag, data, xIn, yIn, scale, options = {}) {
                const proofMode = Boolean(options.proofMode);
                const fragment = buildTagPreviewFragment(tag, data, measureSvg, {
                    proofMode,
                    pxPerInch: proofMode ? scale : undefined,
                    viewBoxWidth: proofMode ? (Math.max(Number(tag.width || 0.25), 0.25) * scale) : (options
                        .viewBoxWidth || 420),
                    viewBoxHeight: proofMode ? (Math.max(Number(tag.height || 0.25), 0.25) * scale) : (options
                        .viewBoxHeight || 260),
                    showSafeArea: Boolean(options.showSafeArea),
                    clipId: options.clipId,
                    cornerRadius: tag.cornerRadius || 'no'
                });
                const sourceGroup = fragment.wrapper;
                if (proofMode) {
                    sourceGroup.setAttribute('transform', 'translate(' + (xIn * scale) + ' ' + (yIn * scale) + ')');
                } else {
                    const targetWidthPx = fragment.widthIn * scale,
                        targetHeightPx = fragment.heightIn * scale,
                        translateX = (xIn * scale) - ((fragment.offsetX / fragment.viewBoxWidth) * targetWidthPx),
                        translateY = (yIn * scale) - ((fragment.offsetY / fragment.viewBoxHeight) * targetHeightPx),
                        scaleX = targetWidthPx / fragment.viewBoxWidth,
                        scaleY = targetHeightPx / fragment.viewBoxHeight;
                    sourceGroup.setAttribute('transform', 'translate(' + translateX + ' ' + translateY + ') scale(' +
                        scaleX + ' ' + scaleY + ')');
                }
                group.appendChild(sourceGroup);
                return {
                    textNodeCount: sourceGroup.querySelectorAll('text').length
                };
            }

            function renderProofTagToGroup(group, liveSvg, tag, data, xIn, yIn, scale, opts = {}) {
                // Direct port of renderDesignPreview logic — renders into live DOM SVG so getBBox works
                const colorPairValue = colorPair(tag.color || 'black_white');
                const bgColor = colorPairValue[0],
                    textColor = colorPairValue[1];
                const shapeValue = data.shape || 'Rectangle';
                const widthIn = Math.max(Number(tag.width || 0) || 1, 0.25);
                const heightIn = Math.max(Number(tag.height || 0) || 1, 0.25);
                const pxPerInch = scale;
                const previewWidth = widthIn * pxPerInch,
                    previewHeight = heightIn * pxPerInch;
                const offsetX = xIn * scale,
                    offsetY = yIn * scale;

                // Background shape
                const proofCornerRadiusIn = (opts.cornerRadius === 'yes') ? 0.125 : 0;
                const proofRadiusValue = proofCornerRadiusIn * scale;
                renderPreviewShape(group, shapeValue, bgColor, proofRadiusValue, previewWidth, previewHeight, offsetX, offsetY);

                // Holes
                const effectiveHoles = tag.holes || 'No holes',
                    effectiveHoleSize = tag.holeSize || '1/8';
                const hasHoles = Boolean(effectiveHoles && effectiveHoles !== 'No holes');
                const selectedHoleSpec = getSelectedHoleSpec(effectiveHoles, effectiveHoleSize, widthIn, heightIn);
                const holeDiameter = selectedHoleSpec && selectedHoleSpec.type === 'round' ? selectedHoleSpec.diameter : (
                    hasHoles ? getAutoHoleDiameter(widthIn, heightIn) : 0);
                const geometry = getTagGeometry({
                    tagWidth: widthIn,
                    tagHeight: heightIn,
                    hasHoles,
                    holeDiameter,
                    holeQuantity: effectiveHoles,
                    holeSizeValue: effectiveHoleSize
                });
                renderHoleFeatures(group, effectiveHoles, effectiveHoleSize, widthIn, heightIn, offsetX, offsetY, pxPerInch,
                    textColor);

                // Safe area in px
                const safeAreaPx = {
                    x: offsetX + inchesToPx(geometry.safeArea.x, pxPerInch),
                    y: offsetY + inchesToPx(geometry.safeArea.y, pxPerInch),
                    width: inchesToPx(geometry.safeArea.width, pxPerInch),
                    height: inchesToPx(geometry.safeArea.height, pxPerInch)
                };
                const safeAreaCenterX = safeAreaPx.x + safeAreaPx.width / 2;
                const safeAreaCenterY = safeAreaPx.y + safeAreaPx.height / 2;

                // Text alignment
                const align = tag.align || 'center';
                const alignmentPadding = pxPerInch * 0.0625;
                let textAnchor = 'middle', textX = safeAreaCenterX;
                if (align === 'left') {
                    textAnchor = 'start';
                    textX = safeAreaPx.x + alignmentPadding;
                } else if (align === 'right') {
                    textAnchor = 'end';
                    textX = safeAreaPx.x + safeAreaPx.width - alignmentPadding;
                }

                // Font/spacing — identical to live preview
                const condensed = (tag.condense || 'no') === 'yes';
                const spacingMultiplier = getLineSpacingMultiplier(tag.lineSpacing || 'full');
                const lines = tag.lines && tag.lines.length ? tag.lines : [{
                    text: 'PREVIEW',
                    bold: false,
                    size: '1/4',
                    customSize: ''
                }];
                // In proof mode font size must be based on actual physical inches * pxPerInch
                // not on portalStageScale which compresses fonts to fit the small proof tag
                const portalStageScale = previewWidth / Math.max(widthIn * PORTAL_TAG_PX_PER_IN, 1);

                const renderedLines = lines.map(line => {
                    const requestedHeightIn = parseSizeValueToInches(getEffectiveLineSizeValue(line)) ||
                        BASELINE_LINE_SIZE_IN;
                    const fontSize = Math.max(4, requestedHeightIn * pxPerInch);
                    const fontFamily = data.fontFamily || 'Arial, Helvetica, sans-serif';
                    const xMetrics = measureReferenceXMetrics(liveSvg, fontSize, fontFamily, line.bold ? 700 : 400);
                    const lineHeight = Math.max(xMetrics.height * 1.0, xMetrics.height + 2);
                    const interlineGap = Math.max(0, lineHeight * spacingMultiplier * 0.5);
                    return {
                        ...line,
                        fontSize,
                        lineHeight,
                        interlineGap,
                        ascent: xMetrics.ascent,
                        textValue: line.text || ''
                    };
                });

                const totalBlockHeight = renderedLines.length <= 1 ?
                    (renderedLines[0] ? renderedLines[0].lineHeight : 0) :
                    renderedLines.reduce((s, l) => s + l.lineHeight, 0) + renderedLines.slice(0, renderedLines.length - 1)
                        .reduce((s, l) => s + l.interlineGap, 0);

                let currentY = safeAreaCenterY - totalBlockHeight / 2;

                // Render text directly into liveSvg (must be in DOM for getBBox)
                const textGroup = createSvgEl('g');
                liveSvg.appendChild(textGroup);
                const renderedTextEls = [];

                renderedLines.forEach((line, index) => {
                    const fontFamily = data.fontFamily || 'Arial, Helvetica, sans-serif';
                    const baselineY = currentY + ((line.lineHeight - line.fontSize) / 2) + line.ascent;
                    const textEl = createSvgEl('text', {
                        x: textX,
                        y: baselineY,
                        'text-anchor': textAnchor,
                        'font-size': line.fontSize,
                        fill: textColor,
                        'font-weight': line.bold ? 700 : 400,
                        'font-family': fontFamily
                    });
                    textEl.textContent = line.textValue;
                    textGroup.appendChild(textEl);
                    renderedTextEls.push({
                        line,
                        textEl,
                        baselineY
                    });
                    currentY += line.lineHeight;
                    if (index < renderedLines.length - 1) currentY += line.interlineGap;
                });

                // Measure natural text width — works because textGroup is in live DOM
                let naturalTextWidth = 0;
                renderedTextEls.forEach(item => {
                    try {
                        const box = item.textEl.getBBox();
                        item.naturalBox = box;
                        naturalTextWidth = Math.max(naturalTextWidth, box.width || 0);
                    } catch (_) {
                        item.naturalBox = {
                            x: textX,
                            y: item.baselineY,
                            width: 0,
                            height: item.line.fontSize
                        };
                    }
                });
                naturalTextWidth = Math.max(naturalTextWidth, 0.1);

                // Condense — identical to live preview
                const safeTextWidth = geometry.safeArea.width;
                const naturalTextWidthIn = naturalTextWidth / pxPerInch;
                const condenseRatio = condensed ? Math.min(1, safeTextWidth / Math.max(naturalTextWidthIn, 0.0001)) : 1;
                renderedTextEls.forEach(item => {
                    if (condenseRatio !== 1) item.textEl.setAttribute('transform', 'translate(' + safeAreaCenterX +
                        ',0) scale(' + condenseRatio + ',1) translate(' + (-safeAreaCenterX) + ',0)');
                    else item.textEl.removeAttribute('transform');
                });

                // Vertical centering — identical to live preview
                try {
                    const groupBox = textGroup.getBBox();
                    const textCenterY = groupBox.y + groupBox.height / 2;
                    const verticalOffset = safeAreaCenterY - textCenterY;
                    textGroup.setAttribute('transform', 'translate(0 ' + verticalOffset + ')');
                } catch (_) {
                    textGroup.removeAttribute('transform');
                }

                // Move textGroup into the caller's group now that measuring is done
                group.appendChild(textGroup);
            }

            function renderProofSheets() {
                if (!proofSheetContainer || !latestQuotePayload) return;
                const layout = buildProofLayoutPages(latestQuotePayload),
                    scale = 96;
                const GAP_IN = 0.25; // must match buildProofLayoutPages gapIn
                proofSheetContainer.innerHTML = '';
                layout.pages.forEach((pagePlacements, pageIndex) => {
                    const page = document.createElement('div');
                    page.className = 'proof-sheet-page';
                    const svgW = layout.sheetWidthIn * scale,
                        svgH = layout.sheetHeightIn * scale;
                    const svg = createSvgEl('svg', {
                        viewBox: '0 0 ' + svgW + ' ' + svgH,
                        xmlns: SVG_NS
                    });
                    svg.appendChild(createSvgEl('rect', {
                        x: 0,
                        y: 0,
                        width: svgW,
                        height: svgH,
                        fill: '#ffffff'
                    }));

                    // ── Header — top centre ──
                    const cx = svgW / 2;
                    const jobNameVal = String((layout.data && layout.data.jobName) || '').trim();
                    // orderNum only exists after Place Order — omit from proof if not yet assigned
                    const orderNumVal = String((latestQuotePayload && latestQuotePayload.orderNum) ||
                        (layout.data && layout.data.orderNum) || '').trim();

                    // Line 1: Company name
                    const hdrTitle = createSvgEl('text', {
                        x: cx,
                        y: 44,
                        'text-anchor': 'middle',
                        'font-size': 22,
                        'font-weight': 700,
                        fill: '#111827',
                        'font-family': 'Arial, Helvetica, sans-serif'
                    });
                    hdrTitle.textContent = 'Accurate Signs & Engraving';
                    svg.appendChild(hdrTitle);

                    // Line 2: Order · Job · Page
                    let subParts = [];
                    if (orderNumVal) subParts.push(orderNumVal);
                    if (jobNameVal) subParts.push('Job: ' + jobNameVal);
                    subParts.push('Page ' + (pageIndex + 1) + ' of ' + layout.pages.length);
                    const hdrSub = createSvgEl('text', {
                        x: cx,
                        y: 70,
                        'text-anchor': 'middle',
                        'font-size': 16,
                        fill: '#640100',
                        'font-family': 'Arial, Helvetica, sans-serif'
                    });
                    hdrSub.textContent = subParts.join(' · ');
                    svg.appendChild(hdrSub);

                    page.appendChild(svg);
                    proofSheetContainer.appendChild(page);

                    // ── Tags + per-tag label in the gap below ──
                    pagePlacements.forEach(placement => {
                        const tg = createSvgEl('g');
                        svg.appendChild(tg);
                        renderProofTagToGroup(tg, svg, placement.tag, layout.data, placement.x, placement.y,
                            scale, {
                            cornerRadius: placement.tag.cornerRadius || 'no'
                        });
                        const tagW = Math.max(0.25, Number(placement.tag.width || 0.25));
                        const tagH = Math.max(0.25, Number(placement.tag.height || 0.25));

                        // Label centred in the 0.25" gap below the tag
                        const labelCX = (placement.x + tagW / 2) * scale;
                        const labelY = (placement.y + tagH) * scale + (GAP_IN / 2 *
                            scale); // vertical centre of gap
                        const tagColor = colorLabel(placement.tag.color || 'black_white');
                        const labelTxt = 'Sign ' + placement.tag.index + ' · ' + formatThreeDecimals(
                            tagH) + '" × ' + formatThreeDecimals(tagW) + '" · ' + tagColor;
                        const lbl = createSvgEl('text', {
                            x: labelCX,
                            y: labelY,
                            'text-anchor': 'middle',
                            'dominant-baseline': 'middle',
                            'font-size': 9.5 * (scale / 96),
                            fill: '#6b7280',
                            'font-family': 'Arial, Helvetica, sans-serif'
                        });
                        lbl.textContent = labelTxt;
                        svg.appendChild(lbl);
                    });
                });
                const zoomValue = Number(proofZoomRange && proofZoomRange.value ? proofZoomRange.value : 150);
                proofSheetContainer.style.transform = 'scale(' + (zoomValue / 100) + ')';
            }

            function openProofReviewStep() {
                if (proofSummaryBlock && latestQuotePayload) {
                    const result = latestQuotePayload.result || {},
                        data = latestQuotePayload.data || {};
                    const pcv = (result.signData || []).map(tag => tag.color || 'black_white');
                    const phm = pcv.length > 0 && !pcv.every(v => v === pcv[0]);
                    proofSummaryBlock.innerHTML = [
                        ['Job name', getSafeQuoteField(data.jobName)],
                        ['Total pieces', result.totalPieces],
                        ['Size', result.sameSize ? result.sizeLabel : 'Mixed'],
                        ['Material', materialLabel(data.material)],
                        ['Color', phm ? 'Mixed' : colorLabel(pcv[0] || 'black_white')],
                        ['Holes', data.holes],
                        ['Product total', currency(result.subtotal || 0)]
                    ].map(p => '<div class="quote-line"><span>' + esc(p[0]) + '</span><strong>' + esc(String(p[1] ||
                        '—')) + '</strong></div>').join('');
                }
                if (orderInfoStep) orderInfoStep.classList.add('hidden');
                if (proofReviewStep) proofReviewStep.classList.remove('hidden');
                if (proofApprovalCheckbox) proofApprovalCheckbox.checked = false;
                updateProofApprovalState();
                // Render AFTER proof step is visible so getBBox works correctly
                requestAnimationFrame(() => renderProofSheets());
            }

            function backToOrderInfoStep() {
                if (proofReviewStep) proofReviewStep.classList.add('hidden');
                if (orderInfoStep) orderInfoStep.classList.remove('hidden');
                if (proofValidationMessage) {
                    proofValidationMessage.textContent = '';
                    proofValidationMessage.classList.remove('show');
                }
            }

            function getSelectedOrderShippingCost() {
                if (!orderShipping) return 0;
                const subtotal = latestQuotePayload ? (latestQuotePayload.result || {}).subtotal || 0 : 0;
                const method = orderShipping.value;
                // Orders over $100 get free UPS Ground
                if (method === 'ground' && subtotal >= 100) return 0;
                return PRICING.shippingRates[method] ?? 0;
            }

            function syncBillingAddressState() {
                const same = !billingSameAsShipping || billingSameAsShipping.checked;
                if (billingAddressFields) billingAddressFields.classList.toggle('hidden', same);
                [billingAddress, billingCity, billingState, billingZip].forEach(f => {
                    if (!f) return;
                    f.disabled = same;
                });
                if (same) {
                    if (billingAddress) billingAddress.value = orderAddress ? orderAddress.value : '';
                    if (billingCity) billingCity.value = orderCity ? orderCity.value : '';
                    if (billingState) billingState.value = orderState ? orderState.value : '';
                    if (billingZip) billingZip.value = orderZip ? orderZip.value : '';
                }
            }

            function refreshOrderTotals() {
                if (!orderTotals || !latestQuotePayload) return;
                const result = latestQuotePayload.result || {};
                const subtotal = result.subtotal || 0;
                const method = orderShipping ? orderShipping.value : 'ground';
                const baseShipping = PRICING.shippingRates[method] ?? 0;
                const freeGround = method === 'ground' && subtotal >= 100;
                const shippingCost = freeGround ? 0 : baseShipping;
                const rows = [
                    ['Subtotal', currency(result.rawSubtotal || 0)],
                    result.minimumApplied ? ['Minimum applied', '$25'] : null,
                    ['Product total', currency(subtotal)],
                    freeGround ? ['UPS Ground', 'Free — orders over $100'] : ['Shipping', currency(shippingCost)],
                    ['Final total', currency(subtotal + shippingCost)]
                ].filter(Boolean);
                orderTotals.innerHTML = rows.map(p => '<div class="quote-line"><span>' + esc(p[0]) + '</span><strong>' +
                    esc(String(p[1])) + '</strong></div>').join('');
            }

            if (orderClose) orderClose.onclick = closeOrderModal;
            if (orderBackToQuote) orderBackToQuote.onclick = () => {
                closeOrderModal();
                if (latestQuotePayload) openQuoteModal(latestQuotePayload);
            };
            if (orderModal) orderModal.onclick = e => {
                if (e.target === orderModal) closeOrderModal();
            };
            if (orderShipping) orderShipping.onchange = () => {
                refreshOrderTotals();
                updatePlaceOrderState();
            };
            [orderAddress, orderCity, orderState, orderZip, billingAddress, billingCity, billingState, billingZip,
                paymentCardholder, paymentCardNumber, paymentExpiry, paymentCvv, paymentBillingZip
            ].forEach(field => {
                if (!field) return;
                field.addEventListener('input', () => {
                    syncBillingAddressState();
                    updatePlaceOrderState();
                    checkSaveAddressNudge();
                    checkSaveBillingAddressNudge();
                });
                field.addEventListener('change', () => {
                    syncBillingAddressState();
                    updatePlaceOrderState();
                    checkSaveAddressNudge();
                    checkSaveBillingAddressNudge();
                });
            });

            // ── Smart save-address nudge ──
            const saveAddressNudge = document.getElementById('saveAddressNudge');
            const nudgeSaveAddressBtn = document.getElementById('nudgeSaveAddressBtn');
            const nudgeDismissAddressBtn = document.getElementById('nudgeDismissAddressBtn');
            let addressNudgeDismissed = false;

            function addressFieldsFilled() {
                return [orderAddress, orderCity, orderState, orderZip].every(f => f && String(f.value || '').trim().length >
                    0);
            }

            async function checkSaveAddressNudge() {
                if (!saveAddressNudge) return;

                if (!authUser) {
                    saveAddressNudge.classList.add('hidden');
                    saveAddressNudge.style.display = 'none';
                    return;
                }

                if (addressNudgeDismissed) return;

                if (!addressFieldsFilled()) {
                    saveAddressNudge.classList.add('hidden');
                    saveAddressNudge.style.display = 'none';
                    return;
                }

                const street = orderAddress ? orderAddress.value.trim().toLowerCase() : '';
                const zip = orderZip ? orderZip.value.trim() : '';

                const alreadySaved = savedAddressesCache.some(a =>
                    (a.street || '').toLowerCase() === street &&
                    String(a.zip || '') === zip
                );

                if (alreadySaved) {
                    saveAddressNudge.classList.add('hidden');
                    saveAddressNudge.style.display = 'none';
                } else {
                    saveAddressNudge.classList.remove('hidden');
                    saveAddressNudge.style.display = 'flex';
                }
            }

            if (nudgeDismissAddressBtn) {
                nudgeDismissAddressBtn.addEventListener('click', () => {
                    addressNudgeDismissed = true;
                    saveAddressNudge.classList.add('hidden');
                    saveAddressNudge.style.display = 'none';
                });
            }

            if (nudgeSaveAddressBtn) {
                nudgeSaveAddressBtn.addEventListener('click', async () => {
                    const street = orderAddress ? orderAddress.value.trim() : '';
                    const city = orderCity ? orderCity.value.trim() : '';
                    const state = orderState ? orderState.value.trim() : '';
                    const zip = orderZip ? orderZip.value.trim() : '';

                    if (!street || !city || !state || !zip) return;

                    const nickname = window.prompt(
                        'Give this address a nickname (e.g. "Main Office"):',
                        city ? city + ' Location' : ''
                    );

                    if (nickname === null) return;

                    try {
                        const saved = await apiSaveAddress({
                            nickname: nickname.trim() || city + ' Location',
                            street,
                            city,
                            state,
                            zip,
                            contact_name: '',
                            phone: ''
                        });

                        savedAddressesCache.unshift(saved);
                        renderAddressList(savedAddressesCache);
                        populateSavedAddressPicker(savedAddressesCache);

                        saveAddressNudge.classList.add('hidden');
                        saveAddressNudge.style.display = 'none';
                        addressNudgeDismissed = true;

                        nudgeSaveAddressBtn.textContent = 'Saved ✓';
                        setTimeout(() => {
                            nudgeSaveAddressBtn.textContent = 'Save';
                        }, 2000);
                    } catch (err) {
                        window.alert(err.message || 'Failed to save address.');
                    }
                });
            }
            // Reset nudge dismissed state each time the order modal opens (handled in quoteModalContinue click above)

            // ── Billing address: saved picker + save nudge ──
            const savedBillingAddressPicker = document.getElementById('savedBillingAddressPicker');
            const saveBillingAddressNudge = document.getElementById('saveBillingAddressNudge');
            const nudgeSaveBillingAddressBtn = document.getElementById('nudgeSaveBillingAddressBtn');
            const nudgeDismissBillingAddressBtn = document.getElementById('nudgeDismissBillingAddressBtn');
            let billingNudgeDismissed = false;

            // Apply selected saved address to billing fields
            if (savedBillingAddressPicker) {
                savedBillingAddressPicker.addEventListener('change', () => {
                    const idx = parseInt(savedBillingAddressPicker.value, 10);
                    if (isNaN(idx)) return;

                    const a = savedAddressesCache[idx];
                    if (!a) return;

                    if (billingAddress) billingAddress.value = a.street || '';
                    if (billingCity) billingCity.value = a.city || '';
                    if (billingState) billingState.value = a.state || '';
                    if (billingZip) billingZip.value = a.zip || '';

                    updatePlaceOrderState();
                });
            }

            function billingFieldsFilled() {
                return [billingAddress, billingCity, billingState, billingZip].every(f => f && String(f.value || '').trim()
                    .length > 0);
            }

            async function checkSaveBillingAddressNudge() {
                if (!saveBillingAddressNudge) return;

                const billingVisible = billingSameAsShipping && !billingSameAsShipping.checked;

                if (!authUser || !billingVisible || billingNudgeDismissed || !billingFieldsFilled()) {
                    saveBillingAddressNudge.classList.add('hidden');
                    saveBillingAddressNudge.style.display = 'none';
                    return;
                }

                const street = billingAddress ? billingAddress.value.trim().toLowerCase() : '';
                const zip = billingZip ? billingZip.value.trim() : '';

                const alreadySaved = savedAddressesCache.some(a =>
                    (a.street || '').toLowerCase() === street &&
                    String(a.zip || '') === zip
                );

                if (alreadySaved) {
                    saveBillingAddressNudge.classList.add('hidden');
                    saveBillingAddressNudge.style.display = 'none';
                } else {
                    saveBillingAddressNudge.classList.remove('hidden');
                    saveBillingAddressNudge.style.display = 'flex';
                }
            }

            if (nudgeDismissBillingAddressBtn) {
                nudgeDismissBillingAddressBtn.addEventListener('click', () => {
                    billingNudgeDismissed = true;
                    saveBillingAddressNudge.classList.add('hidden');
                    saveBillingAddressNudge.style.display = 'none';
                });
            }


            if (nudgeSaveBillingAddressBtn) {
                nudgeSaveBillingAddressBtn.addEventListener('click', async () => {
                    const street = billingAddress ? billingAddress.value.trim() : '';
                    const city = billingCity ? billingCity.value.trim() : '';
                    const state = billingState ? billingState.value.trim() : '';
                    const zip = billingZip ? billingZip.value.trim() : '';

                    if (!street || !city || !state || !zip) return;

                    const nickname = window.prompt(
                        'Give this address a nickname (e.g. "Billing Office"):',
                        city ? city + ' Billing' : ''
                    );

                    if (nickname === null) return;

                    try {
                        const saved = await apiSaveAddress({
                            nickname: nickname.trim() || city + ' Billing',
                            street,
                            city,
                            state,
                            zip,
                            contact_name: '',
                            phone: ''
                        });

                        savedAddressesCache.unshift(saved);
                        renderAddressList(savedAddressesCache);
                        populateSavedAddressPicker(savedAddressesCache);

                        saveBillingAddressNudge.classList.add('hidden');
                        saveBillingAddressNudge.style.display = 'none';
                        billingNudgeDismissed = true;

                        nudgeSaveBillingAddressBtn.textContent = 'Saved ✓';
                        setTimeout(() => {
                            nudgeSaveBillingAddressBtn.textContent = 'Save address';
                        }, 2000);
                    } catch (err) {
                        window.alert(err.message || 'Failed to save billing address.');
                    }
                });
            }

            if (billingSameAsShipping) billingSameAsShipping.addEventListener('change', () => {
                syncBillingAddressState();
                updatePlaceOrderState();
            });
            if (continueToProofBtn) continueToProofBtn.onclick = () => {
                const vm = validateOrderStep();
                if (vm) {
                    setOrderValidationMessage(vm);
                    updatePlaceOrderState();
                    return;
                }
                setOrderValidationMessage('');
                openProofReviewStep();
            };
            if (backToOrderInfoBtn) backToOrderInfoBtn.onclick = backToOrderInfoStep;
            if (proofApprovalCheckbox) proofApprovalCheckbox.addEventListener('change', updateProofApprovalState);
            if (proofZoomRange) proofZoomRange.addEventListener('input', () => {
                const zv = Number(proofZoomRange.value || 100);
                if (proofZoomValue) proofZoomValue.textContent = `${zv}%`;
                if (proofSheetContainer) proofSheetContainer.style.transform = `scale(${zv / 100})`;
            });
            if (downloadProofBtn) downloadProofBtn.addEventListener('click', () => {
                if (!latestQuotePayload) return;

                // Grab the SVGs already rendered in the proof sheet container
                const renderedPages = Array.from(proofSheetContainer.querySelectorAll('.proof-sheet-page svg'));
                if (!renderedPages.length) {
                    window.alert(
                        'Please open the proof review first so the proof can render, then click Download Proof.'
                    );
                    return;
                }

                const customerName = (latestQuotePayload.data && latestQuotePayload.data.customerName) ?
                    String(latestQuotePayload.data.customerName) : 'Proof';
                const dateStr = new Date().toLocaleDateString();

                // Serialize each already-rendered SVG to a string
                const serializer = new XMLSerializer();
                const pagesDivs = renderedPages.map(function (svg, i) {
                    // Clone so we don't mutate the displayed proof
                    const clone = svg.cloneNode(true);
                    // Make sure it fills the page width
                    clone.style.cssText = 'width:100%;height:auto;display:block;';
                    clone.removeAttribute('width');
                    clone.removeAttribute('height');
                    const svgStr = serializer.serializeToString(clone);
                    const breakStyle = i < renderedPages.length - 1 ?
                        'page-break-after:always;' : '';
                    return '<div style="' + breakStyle + 'width:100%;padding:0;margin:0;">' + svgStr +
                        '</div>';
                }).join('');

                const printHtml = '<!DOCTYPE html><html><head>' +
                    '<meta charset="UTF-8">' +
                    '<title>Proof - ' + customerName + '</title>' +
                    '<style>' +
                    '* { box-sizing:border-box; margin:0; padding:0; }' +
                    'body { background:#fff; font-family:Arial,Helvetica,sans-serif; }' +
                    '#toolbar { background:#640100; color:#fff; padding:14px 24px; display:flex; justify-content:space-between; align-items:center; gap:16px; }' +
                    '#toolbar p { font-size:14px; font-weight:700; margin:0; }' +
                    '#toolbar small { font-size:12px; font-weight:400; opacity:0.85; }' +
                    '#pdfBtn { background:#fff; color:#640100; border:none; border-radius:8px; padding:11px 22px; font-size:14px; font-weight:700; cursor:pointer; white-space:nowrap; }' +
                    '#pdfBtn:hover { background:#f5f5f5; }' +
                    'svg { width:100%; height:auto; display:block; }' +
                    '@media print { #toolbar { display:none; } }' +
                    '@page { size:landscape; margin:0.25in; }' +
                    '</style>' +
                    '</head><body>' +
                    '<div id="toolbar">' +
                    '  <div>' +
                    '    <p>Accurate Signs &amp; Engraving &mdash; Proof for ' + customerName + ' &mdash; ' +
                    dateStr + '</p>' +
                    '    <small>Click &ldquo;Save as PDF&rdquo; below &rarr; in the print dialog, set destination to <strong>Save as PDF</strong></small>' +
                    '  </div>' +
                    '  <button id="pdfBtn" onclick="window.print()">&#x2193; Save as PDF</button>' +
                    '</div>' +
                    pagesDivs +
                    '</body></html>';

                const printWin = window.open('', '_blank', 'width=1200,height=850');
                if (!printWin) {
                    window.alert('Popup was blocked. Please allow popups for this page and try again.');
                    return;
                }
                printWin.document.open();
                printWin.document.write(printHtml);
                printWin.document.close();
            });
            if (placeOrderBtn) {
                placeOrderBtn.addEventListener('click', async () => {
                    if (!authUser) {
                        openAuthModal('login');
                        return;
                    }

                    if (!proofApprovalCheckbox || !proofApprovalCheckbox.checked) {
                        if (proofValidationMessage) {
                            proofValidationMessage.textContent = 'Please approve the proof before placing your order.';
                            proofValidationMessage.classList.add('show');
                        }
                        return;
                    }

                    const validationMessage = validateOrderStep();

                    if (validationMessage) {
                        if (orderValidationMessage) {
                            orderValidationMessage.textContent = validationMessage;
                            orderValidationMessage.classList.add('show');
                        }
                        return;
                    }

                    placeOrderBtn.disabled = true;
                    const originalText = placeOrderBtn.textContent;
                    placeOrderBtn.textContent = 'Submitting…';

                    try {
                        const orderPayload = buildOrderApiPayload();
                        const savedOrder = await apiSaveOrder(orderPayload);

                        savedOrdersCache.unshift(savedOrder);
                        renderOrderHistory(savedOrdersCache);

                        placeOrderBtn.textContent = 'Order Placed ✓';

                        window.alert('Order submitted successfully. Order number: ' + savedOrder.order_number);

                        setTimeout(() => {
                            placeOrderBtn.textContent = originalText || 'Place Order';
                            placeOrderBtn.disabled = false;
                            closeOrderModal();
                        }, 1200);
                    } catch (err) {
                        console.error(err);
                        placeOrderBtn.textContent = originalText || 'Place Order';
                        placeOrderBtn.disabled = false;
                        window.alert(err.message || 'Failed to submit order.');
                    }
                });
            }

            // ── Production sheet builder ──
            function buildProductionSheetHtml(payloadJson) {
                // Serialise the proof SVG pages that are already rendered in the DOM
                const serializer = new XMLSerializer();
                const renderedPages = proofSheetContainer ? Array.from(proofSheetContainer.querySelectorAll(
                    '.proof-sheet-page svg')) : [];
                const proofSvgStrings = renderedPages.map(svg => {
                    const clone = svg.cloneNode(true);
                    clone.style.cssText = 'width:100%;height:auto;display:block;';
                    clone.removeAttribute('width');
                    clone.removeAttribute('height');
                    return serializer.serializeToString(clone);
                });

                // Safely parse what we need for the header — all rendering in the new window
                let p = {};
                try {
                    p = JSON.parse(payloadJson);
                } catch (_) { }
                const result = p.result || {};
                const data = p.data || {};
                const oi = p.orderInfo || {};
                const dateStr = new Date().toLocaleString();
                const orderNum = 'ORD-' + Date.now().toString(36).toUpperCase();
                const enrichedForLaser = Object.assign({}, p, {
                    orderNum
                });

                const SHIPPING_LABELS = {
                    pickup: 'Pickup (Free)',
                    ground: 'UPS Ground',
                    '2day': 'UPS 2-Day',
                    overnight: 'Overnight'
                };

                function esc2(s) {
                    return String(s || '').replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g,
                        '&quot;');
                }

                function cur2(n) {
                    return '$' + Number(n || 0).toFixed(2);
                }

                function ml(m) {
                    return m === 'plastic' ? 'Laser-engraved plastic' : String(m || '');
                }

                // Build sign rows for the production table
                const signRows = (result.signData || []).map((tag, i) => {
                    const lines = (tag.lines || []).map(l => esc2(l.text || '')).filter(Boolean).join('<br>');
                    const heights = (tag.lines || []).filter(l => String(l.text || '').trim()).map(l => {
                        if (!l.size || l.size === 'custom') return esc2(l.customSize || '?') + '"';
                        return esc2(l.size) + '"';
                    }).join('<br>');
                    return `<tr>
        <td>${i + 1}</td>
        <td>${tag.qty || 1}</td>
        <td>${esc2(tag.sizeLabel || ((tag.height || '?') + '" × ' + (tag.width || '?') + '"'))}</td>
        <td>${esc2(tag.color || data.color || 'black_white').replace(/_/g, ' / ')}</td>
        <td>${esc2(tag.holes || data.holes || 'No holes')}</td>
        <td style="font-size:12px;line-height:1.5;">${lines || '—'}</td>
        <td style="font-size:12px;line-height:1.5;white-space:nowrap;">${heights || '—'}</td>
      </tr>`;
                }).join('');

                // Build proof SVG blocks
                const proofBlocks = proofSvgStrings.length ?
                    proofSvgStrings.map((svgStr, i) => `
          <div class="proof-page">
            <p class="proof-label">Proof — Page ${i + 1} of ${proofSvgStrings.length}</p>
            ${svgStr}
          </div>`).join('') :
                    '<p style="color:#6b7280;font-size:13px;">Proof not available — re-open proof review to regenerate.</p>';

                return `<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Production Order Sheet — ${esc2(orderNum)}</title>
  <style>
    *{box-sizing:border-box;margin:0;padding:0;}
    body{font-family:Arial,Helvetica,sans-serif;color:#111827;background:#f3f4f6;font-size:13px;}
    #toolbar{background:#640100;color:#fff;padding:14px 24px;display:flex;justify-content:space-between;align-items:center;gap:16px;position:sticky;top:0;z-index:100;}
    #toolbar h1{font-size:16px;font-weight:700;margin:0;}
    #toolbar small{font-size:12px;opacity:0.8;}
    .toolbar-actions{display:flex;gap:10px;}
    .tb-btn{background:#fff;color:#640100;border:none;border-radius:8px;padding:9px 18px;font-size:13px;font-weight:700;cursor:pointer;}
    .tb-btn:hover{background:#f5f5f5;}
    .page{max-width:1100px;margin:28px auto;padding:0 20px 60px;}
    .section{background:#fff;border-radius:14px;border:1px solid #e5e7eb;box-shadow:0 4px 16px rgba(0,0,0,0.05);padding:24px;margin-bottom:20px;}
    .section-title{font-size:11px;font-weight:800;letter-spacing:0.09em;text-transform:uppercase;color:#640100;margin-bottom:14px;}
    .info-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:10px 20px;}
    .info-item label{display:block;font-size:10px;font-weight:700;color:#6b7280;text-transform:uppercase;letter-spacing:0.07em;margin-bottom:2px;}
    .info-item span{font-size:13px;font-weight:600;color:#111827;}
    .order-badge{display:inline-block;background:#fff6f6;border:1px solid #efcfcf;border-radius:999px;padding:4px 14px;font-size:12px;font-weight:700;color:#640100;margin-bottom:18px;}
    table{width:100%;border-collapse:collapse;font-size:12px;}
    thead tr{background:#fafafa;}
    th{text-align:left;padding:9px 10px;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.06em;color:#6b7280;border-bottom:2px solid #e5e7eb;}
    td{padding:9px 10px;border-bottom:1px solid #f0f0f0;vertical-align:top;}
    tr:last-child td{border-bottom:none;}
    tr:nth-child(even) td{background:#fafafa;}
    .totals-grid{display:grid;grid-template-columns:1fr 1fr;gap:12px;}
    .total-line{display:flex;justify-content:space-between;padding:7px 0;font-size:13px;border-bottom:1px dashed #e5e7eb;}
    .total-line:last-child{border-bottom:none;font-weight:700;font-size:15px;color:#640100;}
    .total-line span:first-child{color:#6b7280;}
    .proof-page{margin-bottom:18px;}
    .proof-label{font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:0.08em;color:#640100;margin-bottom:8px;}
    .proof-page svg{width:100%;height:auto;display:block;border:1px solid #d9dde3;border-radius:8px;}
    .status-stamp{display:inline-block;border:3px solid #16a34a;border-radius:10px;padding:8px 20px;color:#15803d;font-size:22px;font-weight:800;letter-spacing:0.06em;transform:rotate(-3deg);opacity:0.85;margin-top:8px;}
    @media print{
      #toolbar{display:none;}
      body{background:#fff;}
      .page{margin:0;padding:0 16px 40px;}
      .section{box-shadow:none;border-color:#e5e7eb;}
      @page{size:landscape;margin:0.4in;}
    }
  </style>
</head>
<body>
<div id="toolbar">
  <div>
    <h1>Accurate Signs &amp; Engraving &mdash; Production Order Sheet</h1>
    <small>Order #${esc2(orderNum)} &nbsp;·&nbsp; ${esc2(dateStr)}</small>
  </div>
  <div class="toolbar-actions">
    <button class="tb-btn" onclick="window.print()">&#x2193; Print / Save PDF</button>
    <button class="tb-btn" id="laserPdfBtn" style="background:#16a34a;color:#fff;">&#x2728; Download Laser File</button>
    <button class="tb-btn" onclick="window.close()">Close</button>
  </div>
</div>

<div class="page">

  <!-- Order header -->
  <div class="section">
    <div class="order-badge">Order #${esc2(orderNum)}</div>
    <p class="section-title">Order information</p>
    <div class="info-grid">
      <div class="info-item"><label>Date</label><span>${esc2(dateStr)}</span></div>
      <div class="info-item"><label>Job name</label><span>${esc2(data.jobName || '—')}</span></div>
      <div class="info-item"><label>Customer</label><span>${esc2(oi.name || data.customerName || '—')}</span></div>
      <div class="info-item"><label>Company</label><span>${esc2(oi.company || data.companyName || '—')}</span></div>
      <div class="info-item"><label>Email</label><span>${esc2(oi.email || data.email || '—')}</span></div>
      <div class="info-item"><label>Phone</label><span>${esc2(oi.phone || data.phone || '—')}</span></div>
      <div class="info-item"><label>Shipping address</label><span>${esc2([oi.address, oi.city, oi.state, oi.zip].filter(Boolean).join(', ') || '—')}</span></div>
      <div class="info-item"><label>Shipping method</label><span>${esc2(SHIPPING_LABELS[oi.shipping] || oi.shipping || '—')}</span></div>
      <div class="info-item"><label>Material</label><span>${esc2(ml(data.material))}</span></div>
      <div class="info-item"><label>Font</label><span>${esc2((data.fontFamily || 'Arial').split(',')[0].replace(/'/g, ''))}</span></div>
      <div class="info-item"><label>Shape</label><span>${esc2(data.shape || 'Rectangle')}</span></div>
      <div class="info-item"><label>Total pieces</label><span>${esc2(result.totalPieces || '—')}</span></div>
    </div>
  </div>

  <!-- Tag breakdown table -->
  <div class="section">
    <p class="section-title">Tag breakdown</p>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Qty</th>
          <th>Size (H × W)</th>
          <th>Color</th>
          <th>Holes</th>
          <th>Text content</th>
          <th>Text heights</th>
        </tr>
      </thead>
      <tbody>
        ${signRows || '<tr><td colspan="7" style="color:#6b7280;">No tag data available.</td></tr>'}
      </tbody>
    </table>
  </div>

  <!-- Totals -->
  <div class="section">
    <p class="section-title">Order totals</p>
    <div class="totals-grid">
      <div>
        <div class="total-line"><span>Subtotal</span><strong>${esc2(cur2(result.rawSubtotal || 0))}</strong></div>
        ${result.minimumApplied ? '<div class="total-line"><span>Minimum applied</span><strong>$25.00</strong></div>' : ''}
        <div class="total-line"><span>Product total</span><strong>${esc2(cur2(result.subtotal || 0))}</strong></div>
        <div class="total-line"><span>Shipping (${esc2(SHIPPING_LABELS[oi.shipping] || oi.shipping || '')})</span><strong>${esc2(cur2(oi.shippingCost || 0))}</strong></div>
        <div class="total-line"><span>Grand total</span><strong>${esc2(cur2((result.subtotal || 0) + (oi.shippingCost || 0)))}</strong></div>
      </div>
      <div>
        <div class="info-item" style="margin-bottom:10px;"><label>Payment</label><span>Card ending in ${esc2(oi.cardLast4 || '****')} &nbsp; Exp ${esc2(oi.expiry || '—')}</span></div>
        <div class="info-item"><label>Cardholder</label><span>${esc2(oi.cardholder || '—')}</span></div>
        <div style="margin-top:16px;"><div class="status-stamp">PROOF APPROVED</div></div>
      </div>
    </div>
  </div>

  <!-- Proof sheets -->
  <div class="section">
    <p class="section-title">Approved proof</p>
    ${proofBlocks}
  </div>

</div>

<script id="laserPayload" type="application/json">${JSON.stringify(enrichedForLaser).replace(/<\/script>/gi, '<\\/script>')}<\/script>

<script>
// ══════════════════════════════════════════════════════════════
//  LASER ENGRAVING PRODUCTION FILE — CorelDraw-ready SVG/PDF
//  Sheet: 24" × 12" landscape  |  Skeleton max: 23.5" × 11.5"
//  All coordinates in inches (SVG viewBox = inches)
//  Strokes: Red (#FF0000) hairline = cut lines
//           Green (#00FF00) hairline = tab cut (50% tag H, left edge, centred)
//           Black (#000000) fill = engraved text (no stroke)
//  Hairline = 0.004pt per CorelDraw convention
// ══════════════════════════════════════════════════════════════
(function() {
  var btn = document.getElementById('laserPdfBtn');
  if (!btn) return;

  var PAYLOAD = {};
  try { PAYLOAD = JSON.parse(document.getElementById('laserPayload').textContent); } catch(e) {}

  // ── Constants ──
  var SHEET_W      = 24,    SHEET_H      = 12;    // landscape inches
  var SKEL_MAX_W   = 23.5,  SKEL_MAX_H   = 11.5;
  var LEFT_BIAS    = 0.25;                         // 0.25" offset for tags/labels within the skeleton interior (left side only)
  var INNER_MARGIN = 0.25;                         // 0.25" from skeleton border to nearest tag (all sides, drives skeleton sizing)
  var GAP          = 0.25;                         // gap between tags (all sides)
  var HEADER_H     = 0;                            // no separate band — header text sits centred in INNER_MARGIN above tags
  var FOOTER_H     = 0;                            // no separate band — footer text sits centred in INNER_MARGIN below tags
  var SKEL_R       = 0.1;                          // skeleton corner radius
  var TAG_R        = 0.125;                        // tag corner radius when enabled (1/8")
  var HAIRLINE     = '0.007';    // ~0.5pt in SVG inch units — visible hairline
  var RED          = '#FF0000';
  var GREEN        = '#00FF00';
  var BLACK        = '#000000';
  // ── DEVELOPER NOTE: Target font is "Switzerland Condensed Bold" (requires license).
  //    Currently falling back to Arial Narrow Bold. When the license is obtained,
  //    replace 'Arial Narrow' with 'Switzerland Condensed' in LABEL_FONT below.
  var LABEL_FONT   = "'Switzerland Condensed','Arial Narrow','Arial Narrow',Arial,sans-serif";
  var LABEL_EM     = 0.14;   // font-size for ~0.1" cap height (cap ≈ 70% of em: 0.14 × 0.70 ≈ 0.1")

  var NS = 'http://www.w3.org/2000/svg';
  function el(tag, attrs) {
    var e = document.createElementNS(NS, tag);
    if (attrs) Object.keys(attrs).forEach(function(k){ e.setAttribute(k, String(attrs[k])); });
    return e;
  }
  function path(d, stroke) {
    return el('path', { d:d, fill:'none', stroke:stroke, 'stroke-width':HAIRLINE, 'stroke-linecap':'butt', 'stroke-linejoin':'miter' });
  }
  // DEVELOPER NOTE: Target font is "Switzerland Condensed Bold" (requires license).
  // Replace 'Arial Narrow' fallback with 'Switzerland Condensed' once licensed.
  function labelText(content, x, y, anchor) {
    // y = vertical centre of the band — dominant-baseline:middle centres the text on y
    var t = el('text', { x:x, y:y, 'font-family':LABEL_FONT, 'font-size':LABEL_EM, 'font-weight':'bold', fill:BLACK, 'text-anchor':anchor||'start', 'dominant-baseline':'middle' });
    t.textContent = content;
    return t;
  }

  // ── Helpers ──
  function parseSizeIn(v) {
    var s = String(v||'').trim();
    if (s.indexOf('/') >= 0) { var p=s.split('/'); return Number(p[0])/Number(p[1]); }
    return Number(s)||0.25;
  }
  function spacingMult(v) {
    if (v==='tight') return 0.25; if (v==='half') return 0.5; if (v==='double') return 2; return 1;
  }

  // ── Hole geometry (mirrors portal logic) ──
  function getHoleSpec(holeQty, holeSzVal) {
    if (!holeQty || holeQty==='No holes') return null;
    if (holeQty==='Cable tie slots') return { type:'slot', w:0.250, h:0.188 };
    var m={'1/8':0.125,'3/16':0.1875,'1/4':0.25};
    return { type:'round', d:m[holeSzVal]||0.125 };
  }
  function holeCO(d) { return d*1.5; }
  function holePts(holeQty, tw, th, co) {
    var lx=co, rx=tw-co, cy=th/2, ty=co, by=th-co;
    if (holeQty==='1 hole left')  return [{x:lx,y:cy}];
    if (holeQty==='1 hole right') return [{x:rx,y:cy}];
    if (holeQty==='2 holes'||holeQty==='Cable tie slots') return [{x:lx,y:cy},{x:rx,y:cy}];
    if (holeQty==='4 holes') return [{x:lx,y:ty},{x:rx,y:ty},{x:lx,y:by},{x:rx,y:by}];
    if (holeQty==='6 holes') return [{x:lx,y:ty},{x:rx,y:ty},{x:lx,y:by},{x:rx,y:by},{x:lx,y:cy},{x:rx,y:cy}];
    return [];
  }

  // ── Tag outline paths: red cut + green tab on left edge ──
  // Red:   ONE continuous open path — starts at left edge 25% from top,
  //        goes UP to corner, clockwise around tag, ends at left edge 75% from top.
  // Green: closes the gap — straight line from 75% back up to 25%.
  function tagPaths(tx, ty, tw, th, tagR, shp) {
    var r = Math.min(tagR, Math.min(tw,th)/2);
    var tabY1 = ty + th*0.25;   // top of tab gap (25% from top)
    var tabY2 = ty + th*0.75;   // bottom of tab gap (75% from top)

    if (shp === 'Circle') {
      var cx=tx+tw/2, cy=ty+th/2, rad=Math.min(tw,th)/2;
      var d = 'M '+(cx-rad)+' '+cy+' A '+rad+' '+rad+' 0 1 1 '+(cx-rad)+' '+(cy-0.00001)+' Z';
      return { red:d, green:'' };
    }

    // Green tab: from bottom of gap up to top of gap (completes the loop)
    var green = 'M '+tx+' '+tabY2+' L '+tx+' '+tabY1;

    var red;
    if (r <= 0) {
      // Square corners — single open path, no jumps
      red = 'M '+tx+' '+tabY1             // start: left edge, top of gap
          +' L '+tx+' '+ty                 // up to top-left corner
          +' L '+(tx+tw)+' '+ty            // right across top
          +' L '+(tx+tw)+' '+(ty+th)      // down right side
          +' L '+tx+' '+(ty+th)            // left across bottom
          +' L '+tx+' '+tabY2;             // up to bottom of gap — path ends here
    } else {
      // Rounded corners — arcs at each corner, still one open path
      red = 'M '+tx+' '+tabY1                                                  // start: top of gap
          +' L '+tx+' '+(ty+r)                                                 // up left side to arc
          +' A '+r+' '+r+' 0 0 1 '+(tx+r)+' '+ty                             // top-left arc
          +' L '+(tx+tw-r)+' '+ty                                              // across top
          +' A '+r+' '+r+' 0 0 1 '+(tx+tw)+' '+(ty+r)                       // top-right arc
          +' L '+(tx+tw)+' '+(ty+th-r)                                        // down right side
          +' A '+r+' '+r+' 0 0 1 '+(tx+tw-r)+' '+(ty+th)                    // bottom-right arc
          +' L '+(tx+r)+' '+(ty+th)                                           // across bottom
          +' A '+r+' '+r+' 0 0 1 '+tx+' '+(ty+th-r)                         // bottom-left arc
          +' L '+tx+' '+tabY2;                                                 // up to bottom of gap
    }
    return { red:red, green:green };
  }

  // ── Text safe-area margins (mirrors portal logic) ──
  function safeMargins(tw, th, holeQty, holeSzVal) {
    var bH = Math.round(tw*0.065*16)/16;
    var bV = Math.min(bH, th*0.15);
    var ml=bH, mr=bH, mt=bV, mb=bV;
    var spec = getHoleSpec(holeQty, holeSzVal);
    if (spec) {
      var side = spec.type==='slot' ? spec.h*3 : spec.d*3;
      if (holeQty==='1 hole left')  ml=side;
      else if (holeQty==='1 hole right') mr=side;
      else if (holeQty==='2 holes'||holeQty==='Cable tie slots') { ml=side; mr=side; }
      else if (holeQty==='4 holes'||holeQty==='6 holes') { ml=side; mr=side; mt=side; mb=side; }
    }
    return {l:ml, r:mr, t:mt, b:mb};
  }

  // ── Data setup — all values read from the order payload ──
  var result   = PAYLOAD.result   || {};
  var data     = PAYLOAD.data     || {};
  var signData = Array.isArray(result.signData) ? result.signData : [];
  var orderNum = PAYLOAD.orderNum || ('ORD-' + Date.now().toString(36).toUpperCase());
  var jobName  = (data.jobName  || '').trim() || 'Untitled Job'; // ← form field: Job Name
  var shape    = data.shape     || 'Rectangle';
  var fontFam  = (data.fontFamily || 'Arial, Helvetica, sans-serif').split(',')[0].replace(/'/g,'').trim();
  // Per-tag: tag.align (left/center/right), tag.lineSpacing (tight/half/full/double),
  //          tag.condense, tag.cornerRadius, tag.lines[].size/bold/text
  // All captured by getSignData() → calculateQuote() → result.signData

  var maxTagAreaW = SKEL_MAX_W - 2*INNER_MARGIN;   // skeleton sizing uses INNER_MARGIN symmetrically
  var maxTagAreaH = SKEL_MAX_H - HEADER_H - FOOTER_H - 2*INNER_MARGIN;

  // Sort by color, expand by qty
  var colorOrder = ['black_white','white_black','white_red','yellow_black','yellow_red','red_white','green_white','blue_white','gray_white','brown_white','orange_white','orange_black','purple_white'];
  var sorted = signData.slice().sort(function(a,b){
    return colorOrder.indexOf(a.color||'black_white') - colorOrder.indexOf(b.color||'black_white');
  });
  var colorGroups = [];
  var curC=null, curG=[];
  sorted.forEach(function(tag){
    var c = tag.color||'black_white';
    if (c!==curC){ if(curG.length) colorGroups.push({color:curC,tags:curG}); curC=c; curG=[]; }
    for(var i=0;i<Math.max(1,Number(tag.qty)||1);i++) curG.push(tag);
  });
  if (curG.length) colorGroups.push({color:curC,tags:curG});

  // ── Column-first packing ──
  var sheets = [];
  colorGroups.forEach(function(group){
    var placements=[], colX=0, colH=0, colW=0;

    function commit(){
      if(!placements.length) return;
      var maxX=0, maxY=0;
      placements.forEach(function(p){ maxX=Math.max(maxX,p.x+p.tw); maxY=Math.max(maxY,p.y+p.th); });
      sheets.push({
        color:  group.color,
        placements: placements,
        skelW:  Math.min(2*INNER_MARGIN + maxX, SKEL_MAX_W),
        skelH:  Math.min(HEADER_H + INNER_MARGIN + maxY + INNER_MARGIN + FOOTER_H, SKEL_MAX_H)
      });
      placements=[]; colX=0; colH=0; colW=0;
    }

    group.tags.forEach(function(tag){
      var tw=Math.max(Number(tag.width)||0.25,0.25);
      var th=Math.max(Number(tag.height)||0.25,0.25);
      // New column needed?
      if (colH>0 && colH+th > maxTagAreaH+0.001){ colX+=colW+GAP; colH=0; colW=0; }
      // New sheet needed?
      if (placements.length>0 && colX+tw > maxTagAreaW+0.001){ commit(); }
      placements.push({tag:tag, x:colX, y:colH, tw:tw, th:th});
      colW=Math.max(colW,tw);
      colH+=th+GAP;
    });
    commit();
  });

  var totalSheets = sheets.length;

  // ── Build one SVG per sheet ──
  function buildSVG(sheet, idx) {
    var svg = el('svg', {
      xmlns: NS,
      width:  SHEET_W+'in', height: SHEET_H+'in',
      viewBox:'0 0 '+SHEET_W+' '+SHEET_H,
      style:  'display:block;background:white;'
    });

    // Skeleton (centred on sheet)
    var sx=0.5, sy=0.5;  // 0.5" margin from all sheet borders
    var sw=sheet.skelW, sh=sheet.skelH, sr=SKEL_R;
    var skelD = 'M '+(sx+sr)+' '+sy
      +' L '+(sx+sw-sr)+' '+sy
      +' A '+sr+' '+sr+' 0 0 1 '+(sx+sw)+' '+(sy+sr)
      +' L '+(sx+sw)+' '+(sy+sh-sr)
      +' A '+sr+' '+sr+' 0 0 1 '+(sx+sw-sr)+' '+(sy+sh)
      +' L '+(sx+sr)+' '+(sy+sh)
      +' A '+sr+' '+sr+' 0 0 1 '+sx+' '+(sy+sh-sr)
      +' L '+sx+' '+(sy+sr)
      +' A '+sr+' '+sr+' 0 0 1 '+(sx+sr)+' '+sy+' Z';
    svg.appendChild(path(skelD, RED));

    // ── Header: Order# - Job Name — centred in the 0.25" INNER_MARGIN above tags ──
    var hdr = orderNum + (jobName ? ' - ' + jobName : '');
    svg.appendChild(labelText(hdr, sx+LEFT_BIAS, sy+INNER_MARGIN/2, 'start'));

    // ── Footer: Sheet X of Y — centred in the 0.25" INNER_MARGIN below tags ──
    svg.appendChild(labelText('Sheet '+idx+' of '+totalSheets, sx+LEFT_BIAS, sy+sh-INNER_MARGIN/2, 'start'));

    // Tag area origin — tags start immediately after INNER_MARGIN (no separate band)
    var tox = sx+LEFT_BIAS;
    var toy = sy+INNER_MARGIN;

    sheet.placements.forEach(function(pl){
      var tag=pl.tag, tw=pl.tw, th=pl.th;
      var tx=tox+pl.x, ty=toy+pl.y;
      var tagR=(tag.cornerRadius==='yes') ? TAG_R : 0;

      // Tag outline: red cut + green tab
      var p=tagPaths(tx, ty, tw, th, tagR, shape);
      if(p.red)   svg.appendChild(path(p.red,   RED));
      if(p.green) svg.appendChild(path(p.green, GREEN));

      // Holes (red hairline)
      var hq=tag.holes||'No holes', hs=tag.holeSize||'1/8';
      var spec=getHoleSpec(hq,hs);
      if(spec){
        if(spec.type==='round'){
          var co=holeCO(spec.d);
          holePts(hq,tw,th,co).forEach(function(pt){
            svg.appendChild(el('circle',{cx:tx+pt.x, cy:ty+pt.y, r:spec.d/2, fill:'none', stroke:RED, 'stroke-width':HAIRLINE}));
          });
        } else {
          var co2=holeCO(spec.h);
          holePts('Cable tie slots',tw,th,co2).forEach(function(pt){
            svg.appendChild(el('rect',{
              x:tx+pt.x-spec.w/2, y:ty+pt.y-spec.h/2,
              width:spec.w, height:spec.h,
              rx:spec.h/2, ry:spec.h/2,
              fill:'none', stroke:RED, 'stroke-width':HAIRLINE
            }));
          });
        }
      }

      // Text (black fill, no stroke — remains editable text for CorelDraw)
      var m=safeMargins(tw,th,hq,hs);
      var sX=tx+m.l, sY=ty+m.t, sW=tw-m.l-m.r, sH=th-m.t-m.b;
      var sCX=sX+sW/2, sCY=sY+sH/2;
      var align=tag.align||'center';
      var lines=Array.isArray(tag.lines)?tag.lines:[];
      var smult=spacingMult(tag.lineSpacing||'full');
      var condensed=(tag.condense||'no')==='yes';

      var metrics=lines.map(function(ln){
        var sv = ln.size==='custom' ? (ln.customSize||'0.25') : (ln.size||'0.25');
        var si = parseSizeIn(sv)||0.25;
        var lh = si*1.2;
        var gh = lh*smult*0.5;
        return {ln:ln, si:si, lh:lh, gh:gh};
      });
      var blkH=metrics.reduce(function(s,m,i){ return s+m.lh+(i<metrics.length-1?m.gh:0); },0);
      var curY=sCY-blkH/2;

      metrics.forEach(function(m,i){
        var txt=(m.ln.text||'').trim();
        if(!txt){ curY+=m.lh+(i<metrics.length-1?m.gh:0); return; }
        var tX, anch;
        if(align==='left')       { tX=sX+0.03;    anch='start'; }
        else if(align==='right') { tX=sX+sW-0.03; anch='end';   }
        else                     { tX=sCX;         anch='middle';}
        var bY=curY+m.lh*0.78;
        var attrs={
          x:tX, y:bY,
          'font-family': fontFam+', Arial, Helvetica, sans-serif',
          'font-size': m.si,
          'font-weight': m.ln.bold?'bold':'normal',
          fill:BLACK, 'text-anchor':anch
        };
        if(condensed && sW>0){ attrs['textLength']=sW; attrs['lengthAdjust']='spacingAndGlyphs'; }
        var te=el('text',attrs);
        te.textContent=txt;
        svg.appendChild(te);
        curY+=m.lh+(i<metrics.length-1?m.gh:0);
      });
    });

    return svg;
  }

  // ── Draw one sheet directly via jsPDF API (no SVG intermediate) ──
  function drawSheetToPdf(pdf, sheet, sheetIdx) {
    function p(v) { return v * 72; }          // inches → points
    var PH = p(SHEET_H);                       // page height in pts (864)

    // ── Raw PDF stream helpers ──
    // All drawing done via pdf.internal.write() for reliable color + hairline rendering.
    // PDF coordinate system has y increasing upward from bottom — flip with (PH - y).
    function m(x,y)  { return x.toFixed(4)+' '+(PH-y).toFixed(4)+' m '; }
    function l(x,y)  { return x.toFixed(4)+' '+(PH-y).toFixed(4)+' l '; }
    function c(x1,y1,x2,y2,x3,y3) {
      return x1.toFixed(4)+' '+(PH-y1).toFixed(4)+' '+
             x2.toFixed(4)+' '+(PH-y2).toFixed(4)+' '+
             x3.toFixed(4)+' '+(PH-y3).toFixed(4)+' c ';
    }
    function stroke()     { pdf.internal.write('S'); }
    function newPath()    { pdf.internal.write('n'); }
    function red()        { pdf.internal.write('1 0 0 RG'); }       // stroke = #FF0000
    function green()      { pdf.internal.write('0 1 0 RG'); }       // stroke = #00FF00
    function hairline()   { pdf.internal.write('0.5 w 0 J 0 j'); }  // 0.5pt — visible hairline; CorelDraw treats as thin cut line
    function drawLine(x1,y1,x2,y2) {
      pdf.internal.write(m(x1,y1)+l(x2,y2)+'S');
    }
    // Quarter-circle arc approximation via cubic bezier (kappa = 0.5523)
    var K = 0.5523;
    // arc from (x1,y1) curving to (x2,y2); c1/c2 are the two bezier control points
    function arcTo(sx,sy, cp1x,cp1y, cp2x,cp2y, ex,ey) {
      pdf.internal.write(c(cp1x,cp1y,cp2x,cp2y,ex,ey));
    }

    var sx  = p(0.5), sy  = p(0.5);
    var swp = p(sheet.skelW), shp = p(sheet.skelH);

    // ── Skeleton border — red hairline rounded rect ──
    hairline(); red();
    var sr = p(SKEL_R);
    pdf.internal.write(
      m(sx+sr, sy) +
      l(sx+swp-sr, sy) +
      c(sx+swp-sr+sr*K, sy,  sx+swp, sy+sr-sr*K,  sx+swp, sy+sr) +
      l(sx+swp, sy+shp-sr) +
      c(sx+swp, sy+shp-sr+sr*K,  sx+swp-sr+sr*K, sy+shp,  sx+swp-sr, sy+shp) +
      l(sx+sr, sy+shp) +
      c(sx+sr-sr*K, sy+shp,  sx, sy+shp-sr+sr*K,  sx, sy+shp-sr) +
      l(sx, sy+sr) +
      c(sx, sy+sr-sr*K,  sx+sr-sr*K, sy,  sx+sr, sy) +
      'S'
    );

    // ── Header: Order# - Job Name ──
    // DEVELOPER NOTE: Replace 'helvetica' with 'Switzerland Condensed Bold' once licensed.
    pdf.setFont('helvetica', 'bold');
    var fs  = p(LABEL_EM);
    var bSh = fs * 0.35;
    pdf.setFontSize(fs);
    pdf.setTextColor(0, 0, 0);
    var hdr = orderNum + (jobName ? ' - ' + jobName : '');
    // Header text centred in the 0.25" INNER_MARGIN above tags
    pdf.text(hdr, sx + p(LEFT_BIAS), sy + p(INNER_MARGIN)/2 + bSh);

    // Footer text centred in the 0.25" INNER_MARGIN below tags
    pdf.text('Sheet ' + sheetIdx + ' of ' + totalSheets,
      sx + p(LEFT_BIAS), sy + shp - p(INNER_MARGIN)/2 + bSh);

    // Tag area origin — tags start at INNER_MARGIN from skeleton top (no separate band)
    var tox = sx + p(LEFT_BIAS);
    var toy = sy + p(INNER_MARGIN);

    // Font mapping: portal font family → jsPDF built-in
    // DEVELOPER NOTE: MS Gothic is not a standard PDF font and does not render correctly
    //   when the laser PDF is opened in CorelDraw. It must be licensed, converted to base64,
    //   and embedded via jsPDF's addFont() — same process as Switzerland Condensed Bold.
    //   Until embedded, MS Gothic falls back to 'courier' which will NOT match the proof.
    // DEVELOPER NOTE: Switzerland Condensed Bold also requires embedding (see note above).
    //   Replace 'helvetica' mapping below with the embedded font name once licensed.
    var fl  = fontFam.toLowerCase();
    var jfn = fl.indexOf('gothic') >= 0 || fl.indexOf('courier') >= 0 ? 'courier'
            : fl.indexOf('times')  >= 0 ? 'times' : 'helvetica';

    sheet.placements.forEach(function(pl) {
      var tag = pl.tag, tw = pl.tw, th = pl.th;
      var txp = tox + p(pl.x),  typ = toy + p(pl.y);
      var twp = p(tw),           thp = p(th);
      var rp  = (tag.cornerRadius === 'yes') ? p(TAG_R) : 0;

      hairline();

      if (shape === 'Circle') {
        // Full circle in red — no tab
        red();
        var cx = txp + twp/2, cy = typ + thp/2, rad = Math.min(twp,thp)/2;
        pdf.internal.write(
          m(cx-rad, cy) +
          c(cx-rad, cy-rad*K,  cx-rad*K, cy-rad,  cx, cy-rad) +
          c(cx+rad*K, cy-rad,  cx+rad, cy-rad*K,  cx+rad, cy) +
          c(cx+rad, cy+rad*K,  cx+rad*K, cy+rad,  cx, cy+rad) +
          c(cx-rad*K, cy+rad,  cx-rad, cy+rad*K,  cx-rad, cy) +
          'S'
        );
      } else {
        var t1 = typ + thp * 0.25;   // top of tab gap
        var t2 = typ + thp * 0.75;   // bottom of tab gap

        // ── Red open path: from t1 clockwise all the way around to t2 ──
        red();
        if (rp <= 0) {
          // Square corners
          pdf.internal.write(
            m(txp, t1) +
            l(txp, typ) +
            l(txp+twp, typ) +
            l(txp+twp, typ+thp) +
            l(txp, typ+thp) +
            l(txp, t2) +
            'S'
          );
        } else {
          // Rounded corners
          pdf.internal.write(
            m(txp, t1) +
            l(txp, typ+rp) +
            c(txp, typ+rp-rp*K,  txp+rp-rp*K, typ,  txp+rp, typ) +
            l(txp+twp-rp, typ) +
            c(txp+twp-rp+rp*K, typ,  txp+twp, typ+rp-rp*K,  txp+twp, typ+rp) +
            l(txp+twp, typ+thp-rp) +
            c(txp+twp, typ+thp-rp+rp*K,  txp+twp-rp+rp*K, typ+thp,  txp+twp-rp, typ+thp) +
            l(txp+rp, typ+thp) +
            c(txp+rp-rp*K, typ+thp,  txp, typ+thp-rp+rp*K,  txp, typ+thp-rp) +
            l(txp, t2) +
            'S'
          );
        }

        // ── Green tab: from t2 up to t1 ──
        green();
        pdf.internal.write(m(txp, t2) + l(txp, t1) + 'S');
      }

      // ── Holes — red hairline ──
      var hq = tag.holes || 'No holes', hs = tag.holeSize || '1/8';
      var spec = getHoleSpec(hq, hs);
      if (spec) {
        hairline(); red();
        if (spec.type === 'round') {
          holePts(hq, tw, th, holeCO(spec.d)).forEach(function(pt) {
            var cx = txp + p(pt.x), cy = typ + p(pt.y), r2 = p(spec.d/2);
            pdf.internal.write(
              m(cx-r2, cy) +
              c(cx-r2, cy-r2*K,  cx-r2*K, cy-r2,  cx, cy-r2) +
              c(cx+r2*K, cy-r2,  cx+r2, cy-r2*K,  cx+r2, cy) +
              c(cx+r2, cy+r2*K,  cx+r2*K, cy+r2,  cx, cy+r2) +
              c(cx-r2*K, cy+r2,  cx-r2, cy+r2*K,  cx-r2, cy) +
              'S'
            );
          });
        } else {
          holePts('Cable tie slots', tw, th, holeCO(spec.h)).forEach(function(pt) {
            var rx = txp + p(pt.x - spec.w/2), ry = typ + p(pt.y - spec.h/2);
            var rw = p(spec.w), rh2 = p(spec.h), rr = p(spec.h/2);
            pdf.internal.write(
              m(rx+rr, ry) +
              l(rx+rw-rr, ry) +
              c(rx+rw-rr+rr*K, ry,  rx+rw, ry+rr-rr*K,  rx+rw, ry+rr) +
              l(rx+rw, ry+rh2-rr) +
              c(rx+rw, ry+rh2-rr+rr*K,  rx+rw-rr+rr*K, ry+rh2,  rx+rw-rr, ry+rh2) +
              l(rx+rr, ry+rh2) +
              c(rx+rr-rr*K, ry+rh2,  rx, ry+rh2-rr+rr*K,  rx, ry+rh2-rr) +
              l(rx, ry+rr) +
              c(rx, ry+rr-rr*K,  rx+rr-rr*K, ry,  rx+rr, ry) +
              'S'
            );
          });
        }
      }

      // ── Engraving text — black, no stroke ──
      var mg  = safeMargins(tw, th, hq, hs);
      var sX  = txp + p(mg.l);
      var sW  = p(tw - mg.l - mg.r);
      var sCX = sX + sW/2;
      var sCY = (typ + p(mg.t)) + p(th - mg.t - mg.b)/2;
      var tagAlign  = tag.align || 'center';
      var lines     = Array.isArray(tag.lines) ? tag.lines : [];
      var smult     = spacingMult(tag.lineSpacing || 'full');
      var condensed = (tag.condense || 'no') === 'yes';
      pdf.setTextColor(0, 0, 0);

      var mets = lines.map(function(ln) {
        var sv   = ln.size === 'custom' ? (ln.customSize || '0.25') : (ln.size || '0.25');
        var siPt = p(parseSizeIn(sv) || 0.25);
        var lh   = siPt * 1.2, gh = lh * smult * 0.5;
        return { ln:ln, siPt:siPt, lh:lh, gh:gh };
      });
      var blkH = mets.reduce(function(s,m,i){ return s+m.lh+(i<mets.length-1?m.gh:0); }, 0);
      var curY = sCY - blkH/2;

      // ── Condense: measure widest line, compute single Tz scale for all lines ──
      // Mirrors portal proof logic: one ratio applied to every line so they
      // compress uniformly (widest line drives the ratio).
      var condenseRatio = 1;
      if (condensed && sW > 0) {
        var maxW = 0;
        mets.forEach(function(mt) {
          var txt2 = (mt.ln.text || '').trim();
          if (!txt2) return;
          pdf.setFont(jfn, mt.ln.bold ? 'bold' : 'normal');
          pdf.setFontSize(mt.siPt);
          var w = pdf.getTextWidth(txt2);
          if (w > maxW) maxW = w;
        });
        if (maxW > sW) condenseRatio = sW / maxW;
      }

      mets.forEach(function(mt, i) {
        var txt = (mt.ln.text || '').trim();
        if (!txt) { curY += mt.lh + (i < mets.length-1 ? mt.gh : 0); return; }
        pdf.setFont(jfn, mt.ln.bold ? 'bold' : 'normal');
        pdf.setFontSize(mt.siPt);
        var baseY = curY + mt.lh * 0.78;

        if (condensed && condenseRatio < 1) {
          // Apply PDF Tz horizontal scaling.
          // We position x manually using the SCALED width so alignment is correct.
          var hScale   = condenseRatio * 100;
          var scaledW  = pdf.getTextWidth(txt) * condenseRatio;
          var startX;
          if      (tagAlign === 'left')  startX = sX;
          else if (tagAlign === 'right') startX = sX + sW - scaledW;
          else                           startX = sCX - scaledW / 2;  // centre

          pdf.internal.write(hScale.toFixed(4) + ' Tz');
          pdf.text(txt, startX, baseY);   // no jsPDF align — we set x manually
          pdf.internal.write('100 Tz');   // reset horizontal scale
        } else {
          var tX   = tagAlign==='left' ? sX+2 : tagAlign==='right' ? sX+sW-2 : sCX;
          var algn = tagAlign==='left' ? 'left' : tagAlign==='right' ? 'right' : 'center';
          pdf.text(txt, tX, baseY, { align: algn });
        }

        curY += mt.lh + (i < mets.length-1 ? mt.gh : 0);
      });

      // Reset stroke colour to black after text so jsPDF state is clean
      pdf.internal.write('0 0 0 RG 100 Tz');
    });
  }

  // ── Script loader ──
  function loadScript(src) {
    return new Promise(function(resolve, reject) {
      if (document.querySelector('script[src="'+src+'"]')) { resolve(); return; }
      var s = document.createElement('script');
      s.src = src;
      s.onload = function() { resolve(); };
      s.onerror = function() { reject(new Error('Failed to load ' + src)); };
      document.head.appendChild(s);
    });
  }

  // ── Button handler — jsPDF direct, no svg2pdf ──
  btn.addEventListener('click', function() {
    if (!sheets.length) { alert('No tag data found to generate laser file.'); return; }
    var origLabel = btn.innerHTML;
    btn.innerHTML = '\u23F3 Building PDF\u2026';
    btn.disabled = true;

    loadScript('https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js')
    .then(function() {
      var jsPDF = window.jspdf && window.jspdf.jsPDF;
      if (!jsPDF) throw new Error('jsPDF failed to load — check internet connection.');
      var PG_W = 24 * 72, PG_H = 12 * 72;
      var pdf = new jsPDF({ orientation: 'l', unit: 'pt', format: [PG_W, PG_H] });
      sheets.forEach(function(sheet, i) {
        if (i > 0) pdf.addPage([PG_W, PG_H], 'l');
        drawSheetToPdf(pdf, sheet, i + 1);
      });
      pdf.save('laser-' + orderNum + '.pdf');
      btn.innerHTML = '\u2713 PDF Downloaded';
      setTimeout(function() { btn.innerHTML = origLabel; btn.disabled = false; }, 3000);
    })
    .catch(function(err) {
      console.error('Laser PDF error:', err);
      alert('PDF generation failed: ' + (err.message || String(err)));
      btn.innerHTML = origLabel;
      btn.disabled = false;
    });
  });
})();
<\/script>
</div>
</body>
</html>`;
            }

            if (quoteModalContinue) quoteModalContinue.addEventListener('click', () => {
                closeQuoteModal();
                const payload = latestQuotePayload; if (!payload) return;
                const result = payload.result || {}, data = payload.data || {};
                const summaryBlock = document.getElementById('orderSummaryBlock');
                if (summaryBlock) summaryBlock.innerHTML = [['Job name', getSafeQuoteField(data.jobName)], ['Total pieces', result.totalPieces], ['Size', result.sizeLabel], ['Material', materialLabel(data.material)], ['Holes', data.holes], ['Shape', data.shape]].map(p => '<div class="quote-line"><span>' + esc(p[0]) + '</span><strong>' + esc(String(p[1] || '—')) + '</strong></div>').join('');
                if (orderName) orderName.value = data.customerName || '';
                if (orderCompany) orderCompany.value = data.companyName || '';
                if (orderEmail) orderEmail.value = data.email || '';
                if (orderPhone) orderPhone.value = data.phone || '';
                if (orderShipping) orderShipping.value = orderShipping.value || 'ground';
                if (billingSameAsShipping) billingSameAsShipping.checked = true;
                // Reset nudge so it can appear fresh on this order
                addressNudgeDismissed = false;
                billingNudgeDismissed = false;
                if (saveAddressNudge) { saveAddressNudge.classList.add('hidden'); saveAddressNudge.style.display = 'none'; }
                if (saveBillingAddressNudge) { saveBillingAddressNudge.classList.add('hidden'); saveBillingAddressNudge.style.display = 'none'; }
                syncBillingAddressState(); refreshOrderTotals(); updatePlaceOrderState();
                if (orderInfoStep) orderInfoStep.classList.remove('hidden');
                if (proofReviewStep) proofReviewStep.classList.add('hidden');
                if (proofApprovalCheckbox) proofApprovalCheckbox.checked = false;
                updateProofApprovalState();
                if (orderModal) { orderModal.style.display = 'flex'; orderModal.setAttribute('aria-hidden', 'false'); }
            });

            // ══════════════════════════════════════════════════════════
            //  AUTH SYSTEM  —  WordPress REST API + JWT
            //  Requires plugin: "JWT Authentication for WP REST API"
            //  https://wordpress.org/plugins/jwt-authentication-for-wp-rest-api/
            // ══════════════════════════════════════════════════════════

            // ── Config ──
            // DEV_BYPASS = true  → no real network calls; localStorage only; any email+password works.
            // Set to false (or remove) when the WordPress backend + JWT plugin are live.
            // const DEV_BYPASS = true;
            // const WP_BASE = (window.acPortalConfig && window.acPortalConfig.wpBase) || 'https://accuratesigns.com';
            // const WP_JWT  = WP_BASE + '/wp-json/jwt-auth/v1/token';
            // const WP_USERS = WP_BASE + '/wp-json/wp/v2/users/me';

            const API_BASE = '/api';
            let authToken = localStorage.getItem('ase_token') || null;
            let authUser = null;

            // ── Auth state ──
            // let authToken  = localStorage.getItem('ac_jwt') || null;
            // let authUser   = null;   // { id, name, email, company, firstName }
            let draftTimer = null;
            let draftSaveQueued = false;

            // ── DOM refs ──
            const authBar = document.getElementById('authBar');
            const authGuestState = document.getElementById('authGuestState');
            const authUserState = document.getElementById('authUserState');
            const authAvatar = document.getElementById('authAvatar');
            const authUserNameEl = document.getElementById('authUserName');
            const authShowLogin = document.getElementById('authShowLogin');
            const authShowRegister = document.getElementById('authShowRegister');
            const authLogoutBtn = document.getElementById('authLogoutBtn');
            const authAccountBtn = document.getElementById('authAccountBtn');
            const authModalBackdrop = document.getElementById('authModalBackdrop');
            const authModalClose = document.getElementById('authModalClose');
            const authModalTitle = document.getElementById('authModalTitle');
            const authModalSub = document.getElementById('authModalSub');
            const authModalError = document.getElementById('authModalError');
            const authLoginForm = document.getElementById('authLoginForm');
            const authRegForm = document.getElementById('authRegisterForm');
            const authLoginLoading = document.getElementById('authLoginLoading');
            const authRegLoading = document.getElementById('authRegLoading');
            const authFooterLoginMsg = document.getElementById('authFooterLoginMsg');
            const authFooterRegisterMsg = document.getElementById('authFooterRegisterMsg');
            const authSwitchToRegister = document.getElementById('authSwitchToRegister');
            const authSwitchToLogin = document.getElementById('authSwitchToLogin');
            const accountModalBackdrop = document.getElementById('accountModalBackdrop');
            const accountModalClose = document.getElementById('accountModalClose');
            const draftStatusEl = document.getElementById('draftStatus');
            const draftDotEl = document.getElementById('draftDot');
            const draftStatusText = document.getElementById('draftStatusText');
            const saveTemplateBtn = document.getElementById('saveTemplateBtn');
            const saveTemplateNameInput = document.getElementById('saveTemplateName');
            const templateListEl = document.getElementById('templateList');
            const draftListEl = document.getElementById('draftList');
            const orderHistoryListEl = document.getElementById('orderHistoryList');

            // ── Utilities ──
            //function authHeaders() { return { 'Content-Type':'application/json', 'Authorization': 'Bearer ' + authToken }; }
            function authHeaders() {
                const headers = {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                };

                if (authToken) {
                    headers.Authorization = 'Bearer ' + authToken;
                }

                return headers;
            }

            async function apiGetTemplates() {
                const res = await fetch(API_BASE + '/templates', {
                    method: 'GET',
                    headers: authHeaders()
                });

                const json = await res.json();

                if (!res.ok || !json.success) {
                    throw new Error(json.message || 'Failed to load templates.');
                }

                return json.data.templates || [];
            }

            async function apiSaveTemplate(payload) {
                const res = await fetch(API_BASE + '/templates', {
                    method: 'POST',
                    headers: authHeaders(),
                    body: JSON.stringify(payload)
                });

                const json = await res.json();

                if (!res.ok || !json.success) {
                    throw new Error(json.message || 'Failed to save template.');
                }

                return json.data.template;
            }

            async function apiDeleteTemplate(id) {
                const res = await fetch(API_BASE + '/templates/' + id, {
                    method: 'DELETE',
                    headers: authHeaders()
                });

                const json = await res.json();

                if (!res.ok || !json.success) {
                    throw new Error(json.message || 'Failed to delete template.');
                }

                return true;
            }
            async function saveCurrentTemplate(templateName) {
                if (!authUser) {
                    openAuthModal('login', 'save_template');
                    return;
                }

                const state = serializeFormState();
                const name = (templateName || state.jobName || 'Untitled Template').trim();

                if (!name) {
                    window.alert('Please enter a template name.');
                    return;
                }

                const totalTags = Array.isArray(state.tags) ? state.tags.length : 0;
                const totalPieces = Array.isArray(state.tags)
                    ? state.tags.reduce((sum, tag) => sum + Number(tag.qty || 0), 0)
                    : 0;

                try {
                    const saved = await apiSaveTemplate({
                        name: name,
                        job_name: state.jobName || null,
                        payload: state,
                        total_tags: totalTags,
                        total_pieces: totalPieces
                    });

                    savedTemplatesCache.unshift(saved);
                    renderTemplateList(savedTemplatesCache);

                    if (saveTemplateNameInput) saveTemplateNameInput.value = '';
                    if (saveTemplateInlineName) saveTemplateInlineName.value = '';
                    if (saveTemplateInline) saveTemplateInline.classList.add('hidden');

                    window.alert('Template saved successfully.');
                } catch (err) {
                    window.alert(err.message || 'Failed to save template.');
                }
            }

            async function apiGetAddresses() {
                const res = await fetch(API_BASE + '/addresses', {
                    method: 'GET',
                    headers: authHeaders()
                });

                const json = await res.json();

                if (!res.ok || !json.success) {
                    throw new Error(json.message || 'Failed to load addresses.');
                }

                return json.data.addresses || [];
            }

            async function apiSaveAddress(payload) {
                const res = await fetch(API_BASE + '/addresses', {
                    method: 'POST',
                    headers: authHeaders(),
                    body: JSON.stringify(payload)
                });

                const json = await res.json();

                if (!res.ok || !json.success) {
                    throw new Error(json.message || 'Failed to save address.');
                }

                return json.data.address;
            }

            async function apiUpdateAddress(id, payload) {
                const res = await fetch(API_BASE + '/addresses/' + id, {
                    method: 'PUT',
                    headers: authHeaders(),
                    body: JSON.stringify(payload)
                });

                const json = await res.json();

                if (!res.ok || !json.success) {
                    throw new Error(json.message || 'Failed to update address.');
                }

                return json.data.address;
            }

            async function apiDeleteAddress(id) {
                const res = await fetch(API_BASE + '/addresses/' + id, {
                    method: 'DELETE',
                    headers: authHeaders()
                });

                const json = await res.json();

                if (!res.ok || !json.success) {
                    throw new Error(json.message || 'Failed to delete address.');
                }

                return true;
            }

            async function apiGetDrafts() {
                const res = await fetch(API_BASE + '/drafts', {
                    method: 'GET',
                    headers: authHeaders()
                });

                const json = await res.json();

                if (!res.ok || !json.success) {
                    throw new Error(json.message || 'Failed to load drafts.');
                }

                return json.data.drafts || [];
            }

            async function apiSaveDraft(payload) {
                const res = await fetch(API_BASE + '/drafts', {
                    method: 'POST',
                    headers: authHeaders(),
                    body: JSON.stringify(payload)
                });

                const json = await res.json();

                if (!res.ok || !json.success) {
                    throw new Error(json.message || 'Failed to save draft.');
                }

                return json.data.draft;
            }

            async function apiDeleteDraft(id) {
                const res = await fetch(API_BASE + '/drafts/' + id, {
                    method: 'DELETE',
                    headers: authHeaders()
                });

                const json = await res.json();

                if (!res.ok || !json.success) {
                    throw new Error(json.message || 'Failed to delete draft.');
                }

                return true;
            }

            async function apiGetOrders() {
                const res = await fetch(API_BASE + '/orders', {
                    method: 'GET',
                    headers: authHeaders()
                });

                const json = await res.json();

                if (!res.ok || !json.success) {
                    throw new Error(json.message || 'Failed to load orders.');
                }

                return json.data.orders || [];
            }

            async function apiSaveOrder(payload) {
                const res = await fetch(API_BASE + '/orders', {
                    method: 'POST',
                    headers: authHeaders(),
                    body: JSON.stringify(payload)
                });

                const json = await res.json();

                if (!res.ok || !json.success) {
                    throw new Error(json.message || 'Failed to submit order.');
                }

                return json.data.order;
            }

            function normalizeAuthUser(user) {
                user = user || {};

                return {
                    id: user.id,
                    name: user.name || '',
                    firstName: user.first_name || user.firstName || '',
                    lastName: user.last_name || user.lastName || '',
                    email: user.email || '',
                    company: user.company || '',
                    phone: user.phone || '',
                    status: user.status || 'active'
                };
            }

            function setAuthError(msg) { if (!authModalError) return; authModalError.textContent = msg || ''; authModalError.classList.toggle('show', Boolean(msg)); }

            // ── Serialize entire form state ──
            function serializeFormState() {
                const state = {
                    jobName: (getEl('jobName') || {}).value || '',
                    globalColor: (getEl('globalColor') || {}).value || 'black_white',
                    holes: (getEl('holes') || {}).value || 'No holes',
                    holeSize: (getEl('holeSize') || {}).value || 'N/A',
                    shape: (getEl('shape') || {}).value || 'Rectangle',
                    material: (getEl('material') || {}).value || 'plastic',
                    fontFamily: (getEl('fontFamily') || {}).value || 'Arial, Helvetica, sans-serif',
                    widthIn: (getEl('widthIn') || {}).value || '3.000',
                    heightIn: (getEl('heightIn') || {}).value || '1.000',
                    sameSizeMode: (getEl('sameSizeMode') || {}).value || 'same',
                    customerName: (getEl('customerName') || {}).value || '',
                    companyName: (getEl('companyName') || {}).value || '',
                    email: (getEl('email') || {}).value || '',
                    phone: (getEl('phone') || {}).value || '',
                    tags: Array.from(document.querySelectorAll('.sign-entry')).map(entry => ({
                        text: (entry.querySelector('.sign-text') || {}).value || '',
                        qty: (entry.querySelector('.sign-qty') || {}).value || '1',
                        width: (entry.querySelector('.sign-width') || {}).value || '',
                        height: (entry.querySelector('.sign-height') || {}).value || '',
                        color: entry.dataset.colorValue || 'black_white',
                        holes: entry.dataset.holeQty || 'No holes',
                        holeSize: entry.dataset.holeSize || '1/8',
                        align: entry.dataset.align || 'center',
                        condense: entry.dataset.condense || 'no',
                        cornerRadius: entry.dataset.cornerRadius || 'no',
                        spacing: (entry.querySelector('.sign-line-spacing') || {}).value || 'full',
                        lineStyles: getStoredLineStyles(entry)
                    }))
                };
                return state;
            }

            // ── Restore form from saved state ──apiGetAddresses()
            function restoreFormState(state) {
                if (!state) return;
                const set = (id, val) => { const el = getEl(id); if (el && val !== undefined) el.value = val; };
                set('jobName', state.jobName);
                set('globalColor', state.globalColor);
                set('holes', state.holes);
                set('shape', state.shape);
                set('material', state.material);
                set('fontFamily', state.fontFamily);
                set('widthIn', state.widthIn);
                set('heightIn', state.heightIn);
                set('sameSizeMode', state.sameSizeMode);
                set('customerName', state.customerName);
                set('companyName', state.companyName);
                set('email', state.email);
                set('phone', state.phone);
                syncHoleSizeOptions();
                set('holeSize', state.holeSize);

                // rebuild tags
                if (Array.isArray(state.tags) && state.tags.length) {
                    signStack.innerHTML = '';
                    state.tags.forEach((tagData, i) => {
                        const card = buildSignCard('Sign ' + (i + 1), tagData.text || '', Number(tagData.qty) || 1, tagData.width || '', tagData.height || '');

                        // ── Restore dataset values (read by getSignData) ──
                        card.dataset.colorValue = tagData.color || 'black_white';
                        card.dataset.holeQty = tagData.holes || 'No holes';
                        card.dataset.holeSize = tagData.holeSize || '1/8';
                        card.dataset.align = tagData.align || 'center';
                        card.dataset.condense = tagData.condense || 'no';
                        card.dataset.cornerRadius = tagData.cornerRadius || 'no';

                        // ── Sync all visible dropdowns to match dataset ──
                        const ss = card.querySelector('.sign-line-spacing'); if (ss) ss.value = tagData.spacing || 'full';
                        const cs = card.querySelector('.tag-color-select'); if (cs) cs.value = tagData.color || 'black_white';
                        const hs = card.querySelector('.tag-holes-select'); if (hs) hs.value = tagData.holes || 'No holes';
                        const rs = card.querySelector('.tag-radius-select'); if (rs) rs.value = tagData.cornerRadius || 'no';
                        const cds = card.querySelector('.tag-condense-select'); if (cds) cds.value = tagData.condense || 'no';

                        // ── Restore per-line font/size styles ──
                        if (Array.isArray(tagData.lineStyles)) setStoredLineStyles(card, tagData.lineStyles);

                        signStack.appendChild(card);
                        syncTagHoleSizeFromHoles(card);
                        syncLineStyleEditor(card);           // also calls updateAlignButtons → refreshes align button visuals
                    });
                    bindSignInputs();
                    renumberSignCards();
                    rebuildPreviewSelector();
                    syncSizeModeUI();
                    updateSizeFieldPresentation();
                    queueLiveEstimateUpdate();
                    renderDesignPreview();
                }
            }

            // ── WP User meta key helpers ──
            const META_TEMPLATES = 'ac_portal_templates';
            const META_DRAFTS = 'ac_portal_drafts';
            const META_ORDER_HISTORY = 'ac_portal_orders';
            const META_ADDRESSES = 'ac_portal_addresses';

            // In bypass mode ALL data goes to localStorage keyed by user id.
            // In production mode, localStorage is still the fallback if the REST endpoint isn't live yet.
            async function wpGetMeta(key) {
                const lsKey = 'ac_' + key + '_' + (authUser ? authUser.id : 'guest');
                if (DEV_BYPASS) {
                    const raw = localStorage.getItem(lsKey);
                    return raw ? JSON.parse(raw) : null;
                }
                try {
                    const res = await fetch(WP_BASE + '/wp-json/accurate-signs/v1/meta?key=' + encodeURIComponent(key), { headers: authHeaders() });
                    if (!res.ok) throw new Error('meta_fetch_failed');
                    const json = await res.json();
                    return json.value || null;
                } catch (_) {
                    const raw = localStorage.getItem(lsKey);
                    return raw ? JSON.parse(raw) : null;
                }
            }
            async function wpSetMeta(key, value) {
                const lsKey = 'ac_' + key + '_' + (authUser ? authUser.id : 'guest');
                localStorage.setItem(lsKey, JSON.stringify(value));
                if (DEV_BYPASS) return;
                try {
                    await fetch(WP_BASE + '/wp-json/accurate-signs/v1/meta', {
                        method: 'POST',
                        headers: authHeaders(),
                        body: JSON.stringify({ key, value })
                    });
                } catch (_) { }
            }

            // ── Update UI based on auth state ──
            function updateAuthUI() {
                const loggedIn = Boolean(authUser);
                authGuestState.style.display = loggedIn ? 'none' : 'flex';
                if (loggedIn) {
                    authUserState.classList.add('visible');
                    const initials = ((authUser.firstName || '?')[0] + (authUser.lastName || '')[0]).toUpperCase();
                    authAvatar.textContent = initials || '?';
                    authUserNameEl.textContent = authUser.firstName || authUser.name || authUser.email;
                    draftStatusEl.classList.remove('hidden');
                    // Auto-fill contact if empty
                    const nameEl = getEl('customerName'), emailEl = getEl('email'), compEl = getEl('companyName');
                    if (nameEl && !nameEl.value && authUser.name) nameEl.value = authUser.name;
                    if (emailEl && !emailEl.value && authUser.email) emailEl.value = authUser.email;
                    if (compEl && !compEl.value && authUser.company) compEl.value = authUser.company;
                    startDraftAutoSave();
                } else {
                    authUserState.classList.remove('visible');
                    draftStatusEl.classList.add('hidden');
                    stopDraftAutoSave();
                    // Hide address picker when logged out
                    if (savedAddressPickerWrap) { savedAddressPickerWrap.classList.add('hidden'); savedAddressPickerWrap.style.display = 'none'; }
                    if (saveCurrentAddressBtn) saveCurrentAddressBtn.classList.add('hidden');
                }
            }

            // ── JWT Login ──
            async function doLogin(email, password) {
                setAuthError('');
                authLoginLoading.classList.remove('hidden');

                try {
                    const res = await fetch(API_BASE + '/login', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ email, password })
                    });

                    const json = await res.json();

                    if (!res.ok || !json.success) {
                        const msg =
                            json.message ||
                            json.errors?.email?.[0] ||
                            json.errors?.password?.[0] ||
                            'Invalid email or password.';

                        throw new Error(msg);
                    }

                    authToken = json.data.token;
                    authUser = normalizeAuthUser(json.data.user);

                    localStorage.setItem('ase_token', authToken);

                    closeAuthModal();
                    updateAuthUI();
                    await loadAccountData();
                    runPendingAction();

                    document.dispatchEvent(new CustomEvent('ac:userLoggedIn'));
                } catch (err) {
                    setAuthError(err.message || 'Sign in failed. Please check your credentials.');
                } finally {
                    authLoginLoading.classList.add('hidden');
                }
            }
            async function doLogin(email, password) {
                setAuthError('');
                authLoginLoading.classList.remove('hidden');

                try {
                    const res = await fetch(API_BASE + '/login', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({ email, password })
                    });

                    const text = await res.text();
                    let json = null;

                    try {
                        json = JSON.parse(text);
                    } catch (e) {
                        console.error('Login non-JSON response:', text);
                        throw new Error('Login API returned HTML instead of JSON. Please check backend route/error.');
                    }

                    if (!res.ok || !json.success) {
                        const msg =
                            json.message ||
                            json.errors?.email?.[0] ||
                            json.errors?.password?.[0] ||
                            'Invalid email or password.';

                        throw new Error(msg);
                    }

                    authToken = json.data.token;
                    authUser = normalizeAuthUser(json.data.user);

                    localStorage.setItem('ase_token', authToken);

                    closeAuthModal();
                    updateAuthUI();
                    await loadAccountData();
                    runPendingAction();

                    document.dispatchEvent(new CustomEvent('ac:userLoggedIn'));
                } catch (err) {
                    setAuthError(err.message || 'Sign in failed. Please check your credentials.');
                } finally {
                    authLoginLoading.classList.add('hidden');
                }
            }
            // ── Registration ──
            async function doRegister(firstName, lastName, email, password, company) {
                setAuthError('');
                authRegLoading.classList.remove('hidden');

                try {
                    const res = await fetch(API_BASE + '/register', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({
                            first_name: firstName,
                            last_name: lastName,
                            email,
                            password,
                            company
                        })
                    });

                    const json = await res.json();

                    if (!res.ok || !json.success) {
                        const msg =
                            json.message ||
                            json.errors?.email?.[0] ||
                            json.errors?.password?.[0] ||
                            json.errors?.first_name?.[0] ||
                            'Registration failed.';

                        throw new Error(msg);
                    }

                    authToken = json.data.token;
                    authUser = normalizeAuthUser(json.data.user);

                    localStorage.setItem('ase_token', authToken);

                    closeAuthModal();
                    updateAuthUI();
                    await loadAccountData();
                    runPendingAction();

                    document.dispatchEvent(new CustomEvent('ac:userLoggedIn'));
                } catch (err) {
                    setAuthError(err.message || 'Registration failed. Please try again.');
                } finally {
                    authRegLoading.classList.add('hidden');
                }
            }

            // ── Fetch current user profile ──
            async function fetchAuthUser() {
                if (!authToken) return;

                try {
                    const res = await fetch(API_BASE + '/me', {
                        method: 'GET',
                        headers: authHeaders()
                    });

                    const json = await res.json();

                    if (!res.ok || !json.success) {
                        doLogout();
                        return;
                    }

                    authUser = normalizeAuthUser(json.data.user);
                } catch (_) {
                    doLogout();
                }
            }

            // ── Logout ──
            async function doLogout() {
                try {
                    if (authToken) {
                        await fetch(API_BASE + '/logout', {
                            method: 'POST',
                            headers: authHeaders()
                        });
                    }
                } catch (_) { }

                authToken = null;
                authUser = null;

                localStorage.removeItem('ase_token');
                localStorage.removeItem('ac_jwt');
                localStorage.removeItem('ac_dev_active_user');

                if (draftAutoSaveInterval) {
                    clearInterval(draftAutoSaveInterval);
                    draftAutoSaveInterval = null;
                }

                if (draftSaveTimer) {
                    clearTimeout(draftSaveTimer);
                    draftSaveTimer = null;
                }

                updateAuthUI();
            }

            // ── On init: restore session if token stored ──
            async function initAuth() {
                if (authToken) {
                    await fetchAuthUser();
                    updateAuthUI();

                    if (authUser) {
                        await loadAccountData();
                        startDraftAutoSave();
                    }

                    return;
                }

                updateAuthUI();
            }

            function startDraftAutoSave() {
                if (draftAutoSaveInterval) {
                    clearInterval(draftAutoSaveInterval);
                }

                draftAutoSaveInterval = setInterval(() => {
                    if (authUser) {
                        saveDraft();
                    }
                }, 30000);
            }

            function scheduleDraftSave() {
                if (!authUser) return;

                if (draftSaveTimer) {
                    clearTimeout(draftSaveTimer);
                }

                draftSaveTimer = setTimeout(() => {
                    saveDraft();
                }, 3000);
            }

            // ── Auth modal helpers ──
            // pendingAction fires once immediately after a successful login/register
            let pendingAction = null;

            function openAuthModal(mode, intent) {
                setAuthError('');
                if (intent) pendingAction = intent;
                const isLogin = mode !== 'register';
                authLoginForm.classList.toggle('hidden', !isLogin);
                authRegForm.classList.toggle('hidden', isLogin);
                authFooterLoginMsg.classList.toggle('hidden', !isLogin);
                authFooterRegisterMsg.classList.toggle('hidden', isLogin);
                authModalTitle.textContent = isLogin ? 'Sign In' : 'Create Account';
                authModalSub.textContent = intent === 'save_template'
                    ? (isLogin ? 'Sign in to save this as a template.' : 'Create an account to save this as a template.')
                    : (isLogin ? 'Access your saved templates and order history.' : 'Create a free account to save templates and reorder easily.');
                authModalBackdrop.classList.add('show');
                authModalBackdrop.setAttribute('aria-hidden', 'false');
                setTimeout(() => {
                    const firstInput = (isLogin ? authLoginForm : authRegForm).querySelector('input');
                    if (firstInput) firstInput.focus();
                }, 80);
            }

            function runPendingAction() {
                const action = pendingAction;
                pendingAction = null;
                if (action === 'save_template') openAccountModalOnTemplates();
            }
            function closeAuthModal() {
                authModalBackdrop.classList.remove('show');
                authModalBackdrop.setAttribute('aria-hidden', 'true');
                setAuthError('');
            }

            // ── Account panel ──
            function openAccountModal() {
                accountModalBackdrop.classList.add('show');
                accountModalBackdrop.setAttribute('aria-hidden', 'false');
                loadAccountData();
            }
            function openAccountModalOnTemplates() {
                // Switch to the Templates tab
                document.querySelectorAll('.account-tab').forEach(t => t.classList.remove('active'));
                document.querySelectorAll('.account-panel').forEach(p => p.classList.remove('active'));
                const templatesTab = document.querySelector('.account-tab[data-panel="templates"]');
                const templatesPanel = document.getElementById('panelTemplates');
                if (templatesTab) templatesTab.classList.add('active');
                if (templatesPanel) templatesPanel.classList.add('active');
                accountModalBackdrop.classList.add('show');
                accountModalBackdrop.setAttribute('aria-hidden', 'false');
                loadAccountData().then(() => {
                    // Pre-fill the template name field and focus it
                    const jobName = (getEl('jobName') || {}).value.trim();
                    if (saveTemplateNameInput) {
                        saveTemplateNameInput.value = jobName || '';
                        setTimeout(() => saveTemplateNameInput.focus(), 120);
                    }
                });
            }
            function closeAccountModal() {
                accountModalBackdrop.classList.remove('show');
                accountModalBackdrop.setAttribute('aria-hidden', 'true');
            }

            // ── Tab switching ──
            document.querySelectorAll('.account-tab').forEach(tab => {
                tab.addEventListener('click', () => {
                    document.querySelectorAll('.account-tab').forEach(t => t.classList.remove('active'));
                    document.querySelectorAll('.account-panel').forEach(p => p.classList.remove('active'));
                    tab.classList.add('active');
                    const panelId = 'panel' + tab.dataset.panel.charAt(0).toUpperCase() + tab.dataset.panel.slice(1);
                    const panel = document.getElementById(panelId);
                    if (panel) panel.classList.add('active');
                });
            });

            // ── Load all account data ──
            async function loadAccountData() {
                if (!authUser) return;

                try {
                    const templates = await apiGetTemplates();
                    savedTemplatesCache = templates;
                    renderTemplateList(templates || []);
                } catch (err) {
                    console.error(err);
                    savedTemplatesCache = [];
                    renderTemplateList([]);
                }

                try {
                    const addresses = await apiGetAddresses();
                    savedAddressesCache = addresses;
                    renderAddressList(addresses || []);
                    populateSavedAddressPicker(addresses || []);
                } catch (err) {
                    console.error(err);
                    savedAddressesCache = [];
                    renderAddressList([]);
                    populateSavedAddressPicker([]);
                }

                try {
                    const drafts = await apiGetDrafts();
                    savedDraftsCache = drafts;
                    renderDraftList(drafts || []);
                } catch (err) {
                    console.error(err);
                    savedDraftsCache = [];
                    renderDraftList([]);
                }

                try {
                    const orders = await apiGetOrders();
                    savedOrdersCache = orders;
                    renderOrderHistory(orders || []);
                } catch (err) {
                    console.error(err);
                    savedOrdersCache = [];
                    renderOrderHistory([]);
                }
            }

            // ── Render template list ──
            function renderTemplateList(templates) {
                if (!templateListEl) return;

                if (!templates.length) {
                    templateListEl.innerHTML = '<div class="account-empty"><div class="account-empty-icon">📋</div>No saved templates yet.<br>Fill out the form and save it as a template to reuse later.</div>';
                    return;
                }

                templateListEl.innerHTML = templates.map((t, i) => {
                    const tagCount = t.total_tags || (t.payload && t.payload.tags ? t.payload.tags.length : 0);
                    const jobName = t.job_name || (t.payload ? t.payload.jobName : '') || '—';
                    const dateText = t.created_at ? new Date(t.created_at).toLocaleDateString() : '';

                    return `
      <div class="account-item">
        <div class="account-item-head">
          <div class="account-item-title">${esc(t.name || 'Template ' + (i + 1))}</div>
          <div class="account-item-meta">${esc(dateText)}</div>
        </div>
        <div class="account-item-meta">${esc(String(tagCount))} tag(s) · ${esc(jobName)}</div>
        <div class="account-item-actions">
          <button type="button" class="account-action-btn" onclick="loadTemplate(${i})">Load</button>
          <button type="button" class="account-action-btn danger" onclick="deleteTemplate(${i})">Delete</button>
        </div>
      </div>`;
                }).join('');
            }

            // ── Render draft list ──
            function renderDraftList(drafts) {
                if (!draftListEl) return;

                if (!drafts.length) {
                    draftListEl.innerHTML = '<div class="account-empty"><div class="account-empty-icon">📝</div>No drafts saved yet.<br>Start building a quote and it will be auto-saved here.</div>';
                    return;
                }

                draftListEl.innerHTML = drafts.map((draft, index) => {
                    const title = draft.title || draft.job_name || 'Untitled Draft';
                    const dateText = draft.updated_at ? new Date(draft.updated_at).toLocaleString() : '';
                    const tagCount = draft.total_tags || 0;
                    const pieces = draft.total_pieces || 0;

                    return `
            <div class="account-item">
                <div class="account-item-head">
                    <div class="account-item-title">${esc(title)}</div>
                    <div class="account-item-meta">${esc(dateText)}</div>
                </div>
                <div class="account-item-meta">${esc(String(tagCount))} tag(s) · ${esc(String(pieces))} piece(s)</div>
                <div class="account-item-actions">
                    <button type="button" class="account-action-btn" onclick="loadDraft(${index})">Load</button>
                    <button type="button" class="account-action-btn danger" onclick="deleteDraft(${index})">Delete</button>
                </div>
            </div>
        `;
                }).join('');
            }

            window.startRenameDraft = function (index) {
                const nameDisplay = document.getElementById('draftNameDisplay_' + index);
                const renameRow = document.getElementById('draftRenameRow_' + index);
                const input = document.getElementById('draftRenameInput_' + index);
                if (nameDisplay) nameDisplay.style.display = 'none';
                if (renameRow) { renameRow.classList.remove('hidden'); renameRow.style.display = 'flex'; }
                if (input) { input.focus(); input.select(); }
                if (input) {
                    input.onkeydown = e => {
                        if (e.key === 'Enter') { e.preventDefault(); window.confirmRenameDraft(index); }
                        if (e.key === 'Escape') { e.preventDefault(); window.cancelRenameDraft(index); }
                    };
                }
            };

            window.cancelRenameDraft = function (index) {
                const nameDisplay = document.getElementById('draftNameDisplay_' + index);
                const renameRow = document.getElementById('draftRenameRow_' + index);
                if (nameDisplay) nameDisplay.style.display = '';
                if (renameRow) { renameRow.classList.add('hidden'); renameRow.style.display = 'none'; }
            };

            window.confirmRenameDraft = async function (index) {
                const input = document.getElementById('draftRenameInput_' + index);
                const newName = input ? input.value.trim() : '';
                if (!newName) { if (input) input.focus(); return; }
                let drafts = await wpGetMeta(META_DRAFTS) || [];
                if (!drafts[index]) return;
                drafts[index].name = newName;
                // Also sync job name in the stored state so it matches
                if (drafts[index].state) drafts[index].state.jobName = newName;
                await wpSetMeta(META_DRAFTS, drafts);
                renderDraftList(drafts);
            };

            // ── Render order history ──
            function renderOrderHistory(orders) {
                if (!orderHistoryList) return;

                if (!orders.length) {
                    orderHistoryList.innerHTML = '<div class="account-empty"><div class="account-empty-icon">📦</div>No orders yet.<br>Your submitted orders will appear here.</div>';
                    return;
                }

                orderHistoryList.innerHTML = orders.map((order, index) => {
                    const title = order.job_name || order.order_number || 'Order';
                    const dateText = order.created_at ? new Date(order.created_at).toLocaleString() : '';
                    const total = Number(order.grand_total || 0).toFixed(2);
                    const pieces = order.total_pieces || 0;
                    const status = order.order_status || 'submitted';

                    return `
            <div class="account-item">
                <div class="account-item-head">
                    <div class="account-item-title">${esc(title)}</div>
                    <div class="account-item-meta">${esc(dateText)}</div>
                </div>
                <div class="account-item-meta">
                    ${esc(order.order_number || '')} · ${esc(String(pieces))} piece(s) · $${esc(total)} · ${esc(status)}
                </div>
                <div class="account-item-actions">
                    <button type="button" class="account-action-btn" onclick="reorderFromHistory(${index})">Reorder</button>
                </div>
            </div>
        `;
                }).join('');
            }

            // ── Save current form as a named template ──
            window.loadTemplate = async function (index) {
                const t = savedTemplatesCache[index];

                if (!t || !t.payload) return;

                restoreFormState(t.payload);
                closeAccountModal();
            };

            window.deleteTemplate = async function (index) {
                const t = savedTemplatesCache[index];

                if (!t || !t.id) return;

                if (!window.confirm('Delete this template?')) return;

                try {
                    await apiDeleteTemplate(t.id);
                    savedTemplatesCache.splice(index, 1);
                    renderTemplateList(savedTemplatesCache);
                } catch (err) {
                    window.alert(err.message || 'Failed to delete template.');
                }
            };

            window.loadDraft = function (index) {
                const draft = savedDraftsCache[index];

                if (!draft || !draft.payload) return;

                restoreFormState(draft.payload);
                closeAccountModal();
            };

            window.deleteDraft = async function (index) {
                const draft = savedDraftsCache[index];

                if (!draft || !draft.id) return;

                if (!window.confirm('Delete this draft?')) return;

                try {
                    await apiDeleteDraft(draft.id);
                    savedDraftsCache.splice(index, 1);
                    renderDraftList(savedDraftsCache);
                } catch (err) {
                    window.alert(err.message || 'Failed to delete draft.');
                }
            };

            // ── Draft auto-save ──
            function showDraftSaving() {
                if (!draftDotEl || !draftStatusText) return;
                draftDotEl.className = 'draft-dot saving';
                draftStatusText.textContent = 'Saving…';
            }
            function showDraftSaved() {
                if (!draftDotEl || !draftStatusText) return;
                draftDotEl.className = 'draft-dot saved';
                draftStatusText.textContent = 'Draft saved';
                setTimeout(() => { if (draftDotEl) draftDotEl.className = 'draft-dot'; }, 3000);
            }
            async function saveDraft() {
                if (!authUser) return;

                const state = serializeFormState();

                const totalTags = Array.isArray(state.tags) ? state.tags.length : 0;
                const totalPieces = Array.isArray(state.tags)
                    ? state.tags.reduce((sum, tag) => sum + Number(tag.qty || 0), 0)
                    : 0;

                // Empty form hole draft save korbo na
                if (!state.jobName && totalTags === 0) return;

                const title = state.jobName || 'Auto Draft';

                try {
                    if (draftDot) draftDot.classList.add('saving');
                    if (draftStatusText) draftStatusText.textContent = 'Saving draft…';

                    const saved = await apiSaveDraft({
                        title,
                        job_name: state.jobName || null,
                        payload: state,
                        total_tags: totalTags,
                        total_pieces: totalPieces
                    });

                    savedDraftsCache.unshift(saved);

                    // Max 20 drafts browser list-e show korbo
                    savedDraftsCache = savedDraftsCache.slice(0, 20);

                    renderDraftList(savedDraftsCache);

                    if (draftDot) {
                        draftDot.classList.remove('saving');
                        draftDot.classList.add('saved');
                    }

                    if (draftStatusText) draftStatusText.textContent = 'Draft saved';
                } catch (err) {
                    console.error('Draft save failed:', err);

                    if (draftDot) {
                        draftDot.classList.remove('saving');
                        draftDot.classList.remove('saved');
                    }

                    if (draftStatusText) draftStatusText.textContent = 'Draft save failed';
                }
            }

          

            // ── Save as Template (main page inline flow) ──
            const saveAsTemplateBtn = document.getElementById('saveAsTemplateBtn');
            const saveTemplateInline = document.getElementById('saveTemplateInline');
            const saveTemplateInlineName = document.getElementById('saveTemplateInlineName');
            const saveTemplateInlineConfirm = document.getElementById('saveTemplateInlineConfirm');
            const saveTemplateInlineCancel = document.getElementById('saveTemplateInlineCancel');

            function openInlineTemplateSave() {
                if (!authUser) { openAuthModal('login', 'save_template'); return; }
                openAccountModalOnTemplates();
            }
            function closeInlineTemplateSave() {
                saveTemplateInline.classList.add('hidden');
                saveTemplateInline.style.display = 'none';
            }

            if (saveAsTemplateBtn) saveAsTemplateBtn.addEventListener('click', openInlineTemplateSave);
            if (saveTemplateInlineCancel) saveTemplateInlineCancel.addEventListener('click', closeInlineTemplateSave);
            if (saveTemplateInlineConfirm) {
                saveTemplateInlineConfirm.addEventListener('click', async () => {
                    const name = (saveTemplateInlineName ? saveTemplateInlineName.value.trim() : '') || 'My Template';

                    saveTemplateInlineConfirm.textContent = 'Saving…';
                    saveTemplateInlineConfirm.disabled = true;

                    try {
                        await saveCurrentTemplate(name);

                        saveTemplateInlineConfirm.textContent = 'Saved ✓';

                        setTimeout(() => {
                            saveTemplateInlineConfirm.textContent = 'Save';
                            saveTemplateInlineConfirm.disabled = false;
                            closeInlineTemplateSave();
                        }, 1000);
                    } catch (err) {
                        saveTemplateInlineConfirm.textContent = 'Save';
                        saveTemplateInlineConfirm.disabled = false;
                        window.alert(err.message || 'Failed to save template.');
                    }
                });
            }
            // Also allow Enter key in the name field
            if (saveTemplateInlineName) saveTemplateInlineName.addEventListener('keydown', e => {
                if (e.key === 'Enter') { e.preventDefault(); saveTemplateInlineConfirm && saveTemplateInlineConfirm.click(); }
                if (e.key === 'Escape') closeInlineTemplateSave();
            });

            // ══════════════════════════════════════════════════════════
            //  SAVED ADDRESSES
            // ══════════════════════════════════════════════════════════

            let editingAddressIndex = -1; // -1 = new, >=0 = editing existing

            const addAddressBtn = document.getElementById('addAddressBtn');
            const addressFormWrap = document.getElementById('addressFormWrap');
            const addressFormTitle = document.getElementById('addressFormTitle');
            const saveAddressBtn = document.getElementById('saveAddressBtn');
            const cancelAddressBtn = document.getElementById('cancelAddressBtn');
            const addressListEl = document.getElementById('addressList');
            const savedAddressPickerWrap = document.getElementById('savedAddressPickerWrap');
            const savedAddressPicker = document.getElementById('savedAddressPicker');
            const saveCurrentAddressBtn = document.getElementById('saveCurrentAddressBtn');

            function getAddressFormValues() {
                return {
                    nickname: (document.getElementById('addrNickname') || {}).value.trim(),
                    street: (document.getElementById('addrStreet') || {}).value.trim(),
                    city: (document.getElementById('addrCity') || {}).value.trim(),
                    state: (document.getElementById('addrState') || {}).value.trim().toUpperCase(),
                    zip: (document.getElementById('addrZip') || {}).value.trim(),
                    contact: (document.getElementById('addrContact') || {}).value.trim(),
                    phone: (document.getElementById('addrPhone') || {}).value.trim(),
                };
            }
            function clearAddressForm() {
                ['addrNickname', 'addrStreet', 'addrCity', 'addrState', 'addrZip', 'addrContact', 'addrPhone'].forEach(id => {
                    const el = document.getElementById(id); if (el) el.value = '';
                });
            }
            function fillAddressForm(addr) {
                const set = (id, val) => { const el = document.getElementById(id); if (el) el.value = val || ''; };
                set('addrNickname', addr.nickname);
                set('addrStreet', addr.street);
                set('addrCity', addr.city);
                set('addrState', addr.state);
                set('addrZip', addr.zip);
                set('addrContact', addr.contact);
                set('addrPhone', addr.phone);
            }
            function openAddressForm(mode, index, addr) {
                editingAddressIndex = (mode === 'edit') ? index : -1;
                addressFormTitle.textContent = (mode === 'edit') ? 'Edit address' : 'New address';
                if (mode === 'edit' && addr) fillAddressForm(addr);
                else clearAddressForm();
                addressFormWrap.classList.remove('hidden');
                addressFormWrap.style.display = 'grid';
                const ni = document.getElementById('addrNickname'); if (ni) ni.focus();
                // scroll form into view inside modal
                addressFormWrap.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
            function closeAddressForm() {
                addressFormWrap.classList.add('hidden');
                addressFormWrap.style.display = 'none';
                editingAddressIndex = -1;
            }

            function renderAddressList(addresses) {
                if (!addressListEl) return;

                if (!addresses.length) {
                    addressListEl.innerHTML = '<div class="account-empty"><div class="account-empty-icon">📍</div>No saved addresses yet.<br>Add delivery locations to quickly fill in shipping details when ordering.</div>';
                    return;
                }

                addressListEl.innerHTML = addresses.map((addr, index) => {
                    const title = addr.nickname || 'Address ' + (index + 1);
                    const line1 = addr.street || '';
                    const line2 = [addr.city, addr.state, addr.zip].filter(Boolean).join(', ');
                    const contact = addr.contact_name || addr.phone
                        ? [addr.contact_name, addr.phone].filter(Boolean).join(' · ')
                        : '';

                    return `
                            <div class="account-item">
                                <div class="account-item-head">
                                    <div class="account-item-title">${esc(title)}</div>
                                    <div class="account-item-meta">${esc(addr.created_at ? new Date(addr.created_at).toLocaleDateString() : '')}</div>
                                </div>
                                <div class="account-item-meta">${esc(line1)}</div>
                                <div class="account-item-meta">${esc(line2)}</div>
                                ${contact ? `<div class="account-item-meta">${esc(contact)}</div>` : ''}
                                <div class="account-item-actions">
                                    <button type="button" class="account-action-btn" onclick="editAddress(${index})">Edit</button>
                                    <button type="button" class="account-action-btn danger" onclick="deleteAddress(${index})">Delete</button>
                                </div>
                            </div>
                        `;
                }).join('');
            }

            function populateSavedAddressPicker(addresses) {
                if (!savedAddressPicker) return;
                // Show the picker only when logged in and there are saved addresses
                const show = authUser && addresses.length > 0;
                if (savedAddressPickerWrap) {
                    savedAddressPickerWrap.classList.toggle('hidden', !show);
                    savedAddressPickerWrap.style.display = show ? 'flex' : 'none';
                }
                if (saveCurrentAddressBtn) {
                    saveCurrentAddressBtn.classList.toggle('hidden', !authUser);
                }
                const opts = '<option value="">— Use a saved address —</option>'
                    + addresses.map((a, i) => `<option value="${i}">${esc(a.nickname || 'Address ' + (i + 1))}</option>`).join('');
                savedAddressPicker.innerHTML = opts;

                // ── Also populate billing picker ──
                const billingPickerWrap = document.getElementById('savedBillingAddressPickerWrap');
                const billingPicker = document.getElementById('savedBillingAddressPicker');
                if (billingPicker) billingPicker.innerHTML = opts;
                if (billingPickerWrap) {
                    billingPickerWrap.classList.toggle('hidden', !show);
                    billingPickerWrap.style.display = show ? 'block' : 'none';
                }
            }

            // Apply selected saved address to shipping fields
            if (savedAddressPicker) {
                savedAddressPicker.addEventListener('change', () => {
                    const idx = parseInt(savedAddressPicker.value, 10);
                    if (isNaN(idx)) return;

                    const a = savedAddressesCache[idx];
                    if (!a) return;

                    if (orderAddress) orderAddress.value = a.street || '';
                    if (orderCity) orderCity.value = a.city || '';
                    if (orderState) orderState.value = a.state || '';
                    if (orderZip) orderZip.value = a.zip || '';

                    syncBillingAddressState();
                    updatePlaceOrderState();
                });
            }

            function getCardLastFour() {
                const raw = paymentCardNumber ? String(paymentCardNumber.value || '').replace(/\D/g, '') : '';
                return raw.length >= 4 ? raw.slice(-4) : null;
            }

            function getShippingTotal(method, productTotal) {
                const total = Number(productTotal || 0);

                if (method === 'pickup') return 0;
                if (method === 'ground') return total > 100 ? 0 : 15;
                if (method === '2day') return 30;
                if (method === 'overnight') return 75;

                return 0;
            }

            function getShippingMethodLabel(value) {
                const labels = {
                    pickup: 'Pickup',
                    ground: 'UPS Ground',
                    '2day': 'UPS 2-Day',
                    overnight: 'Overnight'
                };

                return labels[value] || value || 'UPS Ground';
            }

            function buildOrderApiPayload() {
                const payload = latestQuotePayload;
                const result = payload?.result || {};
                const data = payload?.data || {};
                const signData = Array.isArray(result.signData) ? result.signData : [];
                const quoteItems = Array.isArray(result.quoteItems) ? result.quoteItems : [];

                const shippingMethodValue = orderShipping ? orderShipping.value : 'ground';
                const shippingTotal = getShippingTotal(shippingMethodValue, result.subtotal || 0);
                const grandTotal = Number(result.subtotal || 0) + Number(shippingTotal || 0);

                const formState = serializeFormState();

                const items = quoteItems.map((item, index) => {
                    const tag = item.tag || {};
                    const calc = item.calc || {};

                    return {
                        line_no: index + 1,
                        qty: Number(tag.qty || 1),
                        height: Number(tag.height || calc.heightIn || 0),
                        width: Number(tag.width || calc.widthIn || 0),
                        size_label: tag.sizeLabel || '',
                        color: tag.color || '',
                        holes: tag.holes || '',
                        hole_size: tag.holeSize || '',
                        shape: data.shape || '',
                        text_content: Array.isArray(tag.lines)
                            ? tag.lines.map(line => line.text || '').filter(Boolean).join('\n')
                            : (tag.raw || ''),
                        line_styles: Array.isArray(tag.lines) ? tag.lines : [],
                        unit_price: Number(calc.unitPrice || 0),
                        subtotal: Number(calc.subtotal || 0),
                        payload: tag
                    };
                });

                return {
                    quote_number: data.quoteNumber || null,

                    customer_name: orderName ? orderName.value.trim() : (data.customerName || ''),
                    customer_email: orderEmail ? orderEmail.value.trim() : (data.email || ''),
                    customer_phone: orderPhone ? orderPhone.value.trim() : (data.phone || ''),
                    company: orderCompany ? orderCompany.value.trim() : (data.companyName || ''),
                    job_name: data.jobName || (getEl('jobName') ? getEl('jobName').value.trim() : ''),

                    total_tags: signData.length,
                    total_pieces: Number(result.totalPieces || 0),

                    product_subtotal: Number(result.rawSubtotal || 0),
                    product_total: Number(result.subtotal || 0),
                    shipping_total: Number(shippingTotal || 0),
                    grand_total: Number(grandTotal || 0),

                    shipping_method: getShippingMethodLabel(shippingMethodValue),

                    shipping_address: {
                        street: orderAddress ? orderAddress.value.trim() : '',
                        city: orderCity ? orderCity.value.trim() : '',
                        state: orderState ? orderState.value.trim() : '',
                        zip: orderZip ? orderZip.value.trim() : ''
                    },

                    billing_address: billingSameAsShipping && billingSameAsShipping.checked
                        ? {
                            street: orderAddress ? orderAddress.value.trim() : '',
                            city: orderCity ? orderCity.value.trim() : '',
                            state: orderState ? orderState.value.trim() : '',
                            zip: orderZip ? orderZip.value.trim() : ''
                        }
                        : {
                            street: billingAddress ? billingAddress.value.trim() : '',
                            city: billingCity ? billingCity.value.trim() : '',
                            state: billingState ? billingState.value.trim() : '',
                            zip: billingZip ? billingZip.value.trim() : ''
                        },

                    payment_status: 'pending',
                    payment_method: 'card',
                    card_last_four: getCardLastFour(),

                    proof_approved: Boolean(proofApprovalCheckbox && proofApprovalCheckbox.checked),

                    items,

                    payload: {
                        form_state: formState,
                        quote_payload: latestQuotePayload,
                        order_info: {
                            cardholder: paymentCardholder ? paymentCardholder.value.trim() : '',
                            // Never send full card number/cvv to backend
                            card_last_four: getCardLastFour(),
                            expiry: paymentExpiry ? paymentExpiry.value.trim() : '',
                            billing_zip: paymentBillingZip ? paymentBillingZip.value.trim() : ''
                        }
                    }
                };
            }

            window.reorderFromHistory = function (index) {
                const order = savedOrdersCache[index];

                if (!order || !order.payload) return;

                const state = order.payload.form_state || order.payload.state || order.payload;

                restoreFormState(state);
                closeAccountModal();
            };

            // "Save this address" from the order modal shipping section
            if (saveCurrentAddressBtn) {
                saveCurrentAddressBtn.addEventListener('click', async () => {
                    if (!authUser) {
                        openAuthModal('login');
                        return;
                    }

                    const street = orderAddress ? orderAddress.value.trim() : '';
                    const city = orderCity ? orderCity.value.trim() : '';
                    const state = orderState ? orderState.value.trim() : '';
                    const zip = orderZip ? orderZip.value.trim() : '';

                    if (!street || !city || !state || !zip) {
                        window.alert('Please enter a complete shipping address first.');
                        return;
                    }

                    const nickname = window.prompt(
                        'Give this address a nickname (e.g. "Tucson Location"):',
                        city ? city + ' Location' : ''
                    );

                    if (nickname === null) return;

                    saveCurrentAddressBtn.textContent = 'Saving…';
                    saveCurrentAddressBtn.disabled = true;

                    try {
                        const saved = await apiSaveAddress({
                            nickname: nickname.trim() || city + ' Location',
                            street,
                            city,
                            state,
                            zip,
                            contact_name: '',
                            phone: ''
                        });

                        savedAddressesCache.unshift(saved);
                        renderAddressList(savedAddressesCache);
                        populateSavedAddressPicker(savedAddressesCache);

                        saveCurrentAddressBtn.textContent = 'Saved ✓';

                        setTimeout(() => {
                            saveCurrentAddressBtn.textContent = '+ Save this address to My Addresses';
                            saveCurrentAddressBtn.disabled = false;
                        }, 1500);
                    } catch (err) {
                        saveCurrentAddressBtn.textContent = '+ Save this address to My Addresses';
                        saveCurrentAddressBtn.disabled = false;
                        window.alert(err.message || 'Failed to save address.');
                    }
                });
            }

            // Add address button
            if (addAddressBtn) {
                addAddressBtn.addEventListener('click', () => {
                    editingAddressId = null;
                    clearAddressForm();

                    if (addressFormTitle) addressFormTitle.textContent = 'New address';
                    if (addressFormWrap) {
                        addressFormWrap.classList.remove('hidden');
                        addressFormWrap.style.display = 'grid';
                    }
                });
            }

            if (cancelAddressBtn) {
                cancelAddressBtn.addEventListener('click', () => {
                    editingAddressId = null;
                    clearAddressForm();

                    if (addressFormWrap) {
                        addressFormWrap.classList.add('hidden');
                        addressFormWrap.style.display = 'none';
                    }
                });
            }
            // Save address form
            if (saveAddressBtn) {
                saveAddressBtn.addEventListener('click', async () => {
                    if (!authUser) {
                        openAuthModal('login');
                        return;
                    }

                    const payload = {
                        nickname: addrNickname ? addrNickname.value.trim() : '',
                        street: addrStreet ? addrStreet.value.trim() : '',
                        city: addrCity ? addrCity.value.trim() : '',
                        state: addrState ? addrState.value.trim() : '',
                        zip: addrZip ? addrZip.value.trim() : '',
                        contact_name: addrContact ? addrContact.value.trim() : '',
                        phone: addrPhone ? addrPhone.value.trim() : ''
                    };

                    if (!payload.street || !payload.city || !payload.state || !payload.zip) {
                        window.alert('Please fill street, city, state, and zip.');
                        return;
                    }

                    saveAddressBtn.textContent = 'Saving…';
                    saveAddressBtn.disabled = true;

                    try {
                        let saved;

                        if (editingAddressId) {
                            saved = await apiUpdateAddress(editingAddressId, payload);

                            const idx = savedAddressesCache.findIndex(a => Number(a.id) === Number(editingAddressId));
                            if (idx >= 0) savedAddressesCache[idx] = saved;
                        } else {
                            saved = await apiSaveAddress(payload);
                            savedAddressesCache.unshift(saved);
                        }

                        renderAddressList(savedAddressesCache);
                        populateSavedAddressPicker(savedAddressesCache);

                        editingAddressId = null;
                        clearAddressForm();

                        if (addressFormWrap) addressFormWrap.classList.add('hidden');
                        if (addressFormTitle) addressFormTitle.textContent = 'New address';

                        saveAddressBtn.textContent = 'Save address';
                        saveAddressBtn.disabled = false;
                    } catch (err) {
                        saveAddressBtn.textContent = 'Save address';
                        saveAddressBtn.disabled = false;
                        window.alert(err.message || 'Failed to save address.');
                    }
                });
            }
            function clearAddressForm() {
                if (addrNickname) addrNickname.value = '';
                if (addrStreet) addrStreet.value = '';
                if (addrCity) addrCity.value = '';
                if (addrState) addrState.value = '';
                if (addrZip) addrZip.value = '';
                if (addrContact) addrContact.value = '';
                if (addrPhone) addrPhone.value = '';
            }

            window.editAddress = function (index) {
                const addr = savedAddressesCache[index];
                if (!addr) return;

                editingAddressId = addr.id;

                if (addressFormWrap) addressFormWrap.classList.remove('hidden');
                if (addressFormTitle) addressFormTitle.textContent = 'Edit address';

                if (addrNickname) addrNickname.value = addr.nickname || '';
                if (addrStreet) addrStreet.value = addr.street || '';
                if (addrCity) addrCity.value = addr.city || '';
                if (addrState) addrState.value = addr.state || '';
                if (addrZip) addrZip.value = addr.zip || '';
                if (addrContact) addrContact.value = addr.contact_name || '';
                if (addrPhone) addrPhone.value = addr.phone || '';
            };

            window.deleteAddress = async function (index) {
                const addr = savedAddressesCache[index];
                if (!addr || !addr.id) return;

                if (!window.confirm('Delete this address?')) return;

                try {
                    await apiDeleteAddress(addr.id);
                    savedAddressesCache.splice(index, 1);
                    renderAddressList(savedAddressesCache);
                    populateSavedAddressPicker(savedAddressesCache);
                } catch (err) {
                    window.alert(err.message || 'Failed to delete address.');
                }
            };



            // ── Wire up auth bar events ──
            if (authShowLogin) authShowLogin.addEventListener('click', () => openAuthModal('login'));
            if (authShowRegister) authShowRegister.addEventListener('click', () => openAuthModal('register'));
            if (authModalClose) authModalClose.addEventListener('click', closeAuthModal);
            if (authSwitchToRegister) authSwitchToRegister.addEventListener('click', () => openAuthModal('register'));
            if (authSwitchToLogin) authSwitchToLogin.addEventListener('click', () => openAuthModal('login'));
            if (authLogoutBtn) authLogoutBtn.addEventListener('click', doLogout);
            if (authAccountBtn) authAccountBtn.addEventListener('click', openAccountModal);
            if (accountModalClose) accountModalClose.addEventListener('click', closeAccountModal);
            if (accountModalBackdrop) accountModalBackdrop.addEventListener('click', e => { if (e.target === accountModalBackdrop) closeAccountModal(); });
            if (authModalBackdrop) authModalBackdrop.addEventListener('click', e => { if (e.target === authModalBackdrop) closeAuthModal(); });

            // ── Login form submit ──
            if (authLoginForm) authLoginForm.addEventListener('submit', e => {
                e.preventDefault();
                const email = document.getElementById('authLoginEmail').value.trim();
                const pass = document.getElementById('authLoginPassword').value;
                doLogin(email, pass);
            });

            // ── Register form submit ──
            if (authRegForm) authRegForm.addEventListener('submit', e => {
                e.preventDefault();
                const firstName = document.getElementById('authRegFirstName').value.trim();
                const lastName = document.getElementById('authRegLastName').value.trim();
                const email = document.getElementById('authRegEmail').value.trim();
                const pass = document.getElementById('authRegPassword').value;
                const company = document.getElementById('authRegCompany').value.trim();
                doRegister(firstName, lastName, email, pass, company);
            });

            // ── Save template button ──
            if (saveTemplateBtn) {
                saveTemplateBtn.addEventListener('click', async () => {
                    if (!authUser) {
                        openAuthModal('login', 'save_template');
                        return;
                    }

                    const name =
                        (saveTemplateNameInput ? saveTemplateNameInput.value.trim() : '') ||
                        (getEl('jobName') ? getEl('jobName').value.trim() : '') ||
                        'My Template';

                    saveTemplateBtn.textContent = 'Saving…';
                    saveTemplateBtn.disabled = true;

                    try {
                        await saveCurrentTemplate(name);

                        saveTemplateBtn.textContent = 'Saved ✓';

                        setTimeout(() => {
                            saveTemplateBtn.textContent = 'Save current';
                            saveTemplateBtn.disabled = false;
                        }, 1200);
                    } catch (err) {
                        saveTemplateBtn.textContent = 'Save current';
                        saveTemplateBtn.disabled = false;
                        window.alert(err.message || 'Failed to save template.');
                    }
                });
            }
            // ── Hook into Place Order to record order history ──
            const _origPlaceOrderHandler = () => { };
            document.addEventListener('ac:orderPlaced', async (e) => {
                if (e.detail && e.detail.payload) await saveOrderToHistory(e.detail.payload);
            });

            // ── Init auth ──
            initAuth();



            // ── Account nudge on email blur ──
            (function () {
                const nudge = document.getElementById('accountNudge');
                const emailField = document.getElementById('email');
                const dismissBtn = document.getElementById('nudgeDismissBtn');
                const createBtn = document.getElementById('nudgeCreateAccountBtn');
                let nudgeDismissed = false;

                function checkNudge() {
                    if (!nudge || nudgeDismissed || authUser) return;
                    const emailVal = emailField ? emailField.value.trim() : '';
                    const hasEmail = emailVal.length > 3 && emailVal.includes('@');
                    nudge.classList.toggle('hidden', !hasEmail);
                    nudge.style.display = hasEmail ? 'flex' : 'none';
                }

                if (emailField) {
                    emailField.addEventListener('blur', checkNudge);
                    emailField.addEventListener('input', checkNudge);
                }

                if (dismissBtn) {
                    dismissBtn.addEventListener('click', () => {
                        nudgeDismissed = true;
                        nudge.classList.add('hidden');
                        nudge.style.display = 'none';
                    });
                }

                if (createBtn) {
                    createBtn.addEventListener('click', () => {
                        // Pre-fill the register form with whatever's already typed
                        const name = (getEl('customerName') || {}).value.trim() || '';
                        const company = (getEl('companyName') || {}).value.trim() || '';
                        const email = (getEl('email') || {}).value.trim() || '';
                        const parts = name.split(' ');
                        const firstName = parts[0] || '';
                        const lastName = parts.slice(1).join(' ') || '';
                        openAuthModal('register', null);
                        // Give the modal a moment to render before filling fields
                        setTimeout(() => {
                            const fn = document.getElementById('authRegFirstName');
                            const ln = document.getElementById('authRegLastName');
                            const em = document.getElementById('authRegEmail');
                            const co = document.getElementById('authRegCompany');
                            if (fn) fn.value = firstName;
                            if (ln) ln.value = lastName;
                            if (em) em.value = email;
                            if (co) co.value = company;
                            // Focus password field since everything else is filled
                            const pw = document.getElementById('authRegPassword');
                            if (pw) pw.focus();
                        }, 80);
                    });
                }

                // Hide nudge immediately if user logs in
                document.addEventListener('ac:userLoggedIn', () => {
                    if (nudge) { nudge.classList.add('hidden'); nudge.style.display = 'none'; }
                });
            })();

            // ── Init ──
            setSummaryDefaults();
            addSignBox();
            rebuildPreviewSelector();
            syncSizeModeUI();
            syncHoleSizeOptions();
            renderDesignPreview();
            queueLiveEstimateUpdate();
        });
    </script>
</body>

</html>