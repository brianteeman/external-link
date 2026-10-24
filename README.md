# Proposal

This plugin is a proof of concept for a possible inclusion in Joomla 6.3

The current css only inclusing of an icon to indicate that a link is going to open in a new window is not screenreader friendly - with this pr we can remove that css and instead have the links rendered with an icon AND screen reader only text that indicates the link opens in a new window.

The criteria for displaying the icon has not changed

Inspiration for this plugin comes from https://github.com/itmaybejj/linkpurpose but it is considerably simplified in scope.

# External Link

A Joomla 6 system plugin that adds an accessible new-window indicator to links with `target="_blank"`.

The plugin adds an inline SVG icon at the end of each matching link, along with screen-reader-only text announcing that the link opens in a new tab or window. The icon is hidden from assistive technology with `aria-hidden="true"`; the announcement is translated through Joomla's JavaScript language-string support.

The final visible word and indicator are kept together where it is safe to do so, helping prevent the icon from wrapping onto a line by itself. Long final strings and links without a suitable visible word use a safe fallback.

The plugin is enabled in the administrator. An option allows it to be enabled on the frontend as well.

## Installation

Package the contents of `plugins/system/externallink` as a Joomla plugin installation archive, or install it through the Joomla extension installer once a release package is available.

After installation, enable **System - External Link** in the Plugin Manager.

## Scope

This plugin only targets links with `target="_blank"`. It does not detect external domains or add indicators for downloads, email addresses, telephone numbers, or other link types.

The existing CSS rule that injects a Font Awesome icon is outside the scope of this plugin and must be removed separately if it is still present in the site template or core CSS.
