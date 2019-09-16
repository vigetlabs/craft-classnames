# Classnames plugin for Craft CMS 3.x

Classnames is a simple Twig function for conditionally joining css class names together in Twig templates, in a way that makes them much more readable. It's like Jed Watson's [Classnames](https://github.com/JedWatson/classnames) but for Twig in Craft.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require viget/craft-classnames

3. Install the plugin via `./craft install/plugin classnames` via the CLI, or in the Control Panel, go to Settings → Plugins and click the “Install” button for Classnames.

## Using Classnames

A real world example:

```twig
<button
  class="{{ classNames({
    'group relative z-0 hover:z-1': true,
    'px-24 py-12': true,
    'font-bold text-14 text-dark-gray': true,
    'inline-flex items-center justify-between': props.arrow,
    'inline-block': not props.arrow,
    'w-full text-center': props.full
  }) }}"
>
  {{ props.text }}
</button>
```

Other examples:

```twig
{{ classNames('foo', 'bar') }} {# 'foo bar' #}
{{ classNames('foo', { 'bar': true }) }} {# 'foo bar' #}
{{ classNames({ 'foo-bar': true }) }} {# 'foo-bar' #}
{{ classNames({ 'foo-bar': false }) }} {# '' #}
{{ classNames({ 'foo': true }, { 'bar': true }) }} {# 'foo bar' #}
{{ classNames({ 'foo': true, 'bar': true }) }} {# 'foo bar' #}
```

There is even a shorthand `cx` version available:

```twig
{{ cx('foo', { 'bar': true }) }} {# 'foo bar' #}
```

***

<a href="http://code.viget.com">
  <img src="http://code.viget.com/github-banner.png" alt="Code At Viget">
</a>

Visit [code.viget.com](http://code.viget.com) to see more projects from [Viget](https://viget.com).
