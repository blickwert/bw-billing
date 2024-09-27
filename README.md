# Blickwert Billing

## Beschreibung
Blickwert Billing ist ein WordPress-Plugin zur Verwaltung von Rechnungen, Angeboten, Kunden und Vorlagen. Es ermöglicht die einfache Verwaltung und Erstellung von PDF-Dokumenten für Rechnungen und Angebote.

## Features
- Verwaltung von Rechnungen und Angeboten
- Kundenverwaltung
- Vorlagenverwaltung für PDF-Ausgaben
- Möglichkeit zur Erstellung und zum Download von PDF-Dokumenten

## Voraussetzungen
- WordPress 5.0 oder höher
- ACF Pro (Advanced Custom Fields Pro) Plugin

## Installation
1. Lade das Plugin herunter und entpacke es.
2. Lade den gesamten Ordner `bw-billing` in das Verzeichnis `/wp-content/plugins/` deiner WordPress-Installation.
3. Aktiviere das Plugin über das Menü `Plugins` in WordPress.

## Verzeichnisstruktur
- `bw-billing.php`: Hauptplugin-Datei
- `includes/`: Verzeichnis für Plugin-Klassen
  - `class-bw-billing-init.php`: Registrierung der Custom Post Types und Taxonomien
  - `class-bw-chat-frontend.php`: (Platzhalter für zukünftige Frontend-Funktionalitäten)
  - `class-bw-billing-plugin-page.php`: Erstellung der Plugin-Admin-Seite und Subpages
  - `class-bw-billing-pdf.php`: PDF-Erstellung und Download
- `dompdf/`: DOMPDF-Bibliothek zur Erstellung von PDF-Dokumenten

## Verwendung
Nach der Aktivierung des Plugins finden Sie im WordPress-Dashboard ein neues Menü namens "Billing". Unter diesem Menü können Sie Rechnungen, Angebote, Kunden und Vorlagen verwalten. Zudem können Sie Vorlagen verwenden, um das Layout der generierten PDF-Dokumente anzupassen.

## Lizenz
Dieses Plugin ist unter der GPL2-Lizenz lizenziert.
