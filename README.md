# Blickwert Billing

## Beschreibung
Blickwert Billing ist ein WordPress-Plugin zur Verwaltung von Rechnungen, Angeboten, Kunden und Vorlagen. Es erm�glicht die einfache Verwaltung und Erstellung von PDF-Dokumenten f�r Rechnungen und Angebote.

## Features
- Verwaltung von Rechnungen und Angeboten
- Kundenverwaltung
- Vorlagenverwaltung f�r PDF-Ausgaben
- M�glichkeit zur Erstellung und zum Download von PDF-Dokumenten

## Voraussetzungen
- WordPress 5.0 oder h�her
- ACF Pro (Advanced Custom Fields Pro) Plugin

## Installation
1. Lade das Plugin herunter und entpacke es.
2. Lade den gesamten Ordner `bw-billing` in das Verzeichnis `/wp-content/plugins/` deiner WordPress-Installation.
3. Aktiviere das Plugin �ber das Men� `Plugins` in WordPress.

## Verzeichnisstruktur
- `bw-billing.php`: Hauptplugin-Datei
- `includes/`: Verzeichnis f�r Plugin-Klassen
  - `class-bw-billing-init.php`: Registrierung der Custom Post Types und Taxonomien
  - `class-bw-chat-frontend.php`: (Platzhalter f�r zuk�nftige Frontend-Funktionalit�ten)
  - `class-bw-billing-plugin-page.php`: Erstellung der Plugin-Admin-Seite und Subpages
  - `class-bw-billing-pdf.php`: PDF-Erstellung und Download
- `dompdf/`: DOMPDF-Bibliothek zur Erstellung von PDF-Dokumenten

## Verwendung
Nach der Aktivierung des Plugins finden Sie im WordPress-Dashboard ein neues Men� namens "Billing". Unter diesem Men� k�nnen Sie Rechnungen, Angebote, Kunden und Vorlagen verwalten. Zudem k�nnen Sie Vorlagen verwenden, um das Layout der generierten PDF-Dokumente anzupassen.

## Lizenz
Dieses Plugin ist unter der GPL2-Lizenz lizenziert.
