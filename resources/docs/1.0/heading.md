# Heading

---

-   [Props](#heading-props)
-   [Slots](#heading-slots)
-   [Small](#heading-small)
-   [Normal](#heading-normal)
-   [Large](#heading-large)
-   [Heading](#heading-heading)
-   [Heading 2](#heading-heading2)
-   [Small Caps](#heading-small-caps)
-   [Display](#heading-display)
-   [Display 2](#heading-display2)
-   [heading with Anchor](#heading-anchor)

<a name="heading-small"></a>

## Small

> <heading size="small">This is a small heading</heading>

```blade
<s-heading size="small">
    This is a small heading
</s-heading>
```

<a name="heading-normal"></a>

## Normal

> <heading>This is a normal heading</heading>

```php
<s-heading>
    This is a normal heading
</s-heading>
```

<a name="heading-large"></a>

## Large

> <heading size="large">This is a large heading</heading>

```php
<s-heading size="large">
    This is a large heading
</s-heading>
```

<a name="heading-heading"></a>

## Heading

> <heading size="heading">This is a heading</heading>

```php
<s-heading size="heading">
    This is a heading
</s-heading>
```

<a name="heading-heading2"></a>

## Heading 2

> <heading size="heading2">This is a heading 2</heading>

```php
<s-heading size="heading2">
    This is a heading 2
</s-heading>
```

<a name="heading-small-caps"></a>

## Small Caps

> <heading size="small-caps">This is a small caps heading</heading>

```php
<s-heading size="small-caps">
    This is a small caps heading
</s-heading>
```

<a name="heading-display"></a>

## Display

> <heading size="display">This is a display heading</heading>

```php
<s-heading size="display">
    This is a display heading
</s-heading>
```

<a name="heading-display2"></a>

## Display 2

> <heading size="display2">This is a display 2 heading</heading>

```php
<s-heading size="display2">
    This is a display 2 heading
</s-heading>
```

<a name="heading-anchor"></a>

## Heading with Anchor

> <heading size="heading" tag="a" to="https://tailwindcss.com/">Tailwindcss</heading>

```php
<s-heading size="heading" tag="a" to="https://tailwindcss.com/">
    Tailwindcss
</s-heading>
```

<a name="heading-props"></a>

## Props

`default option`

| Name  | Type   | Description                      | Accepted                                                                       |
| :---- | ------ | :------------------------------- | :----------------------------------------------------------------------------- |
| size  | String | size of the heading              | small, `normal`, large, heading, heading2, small-caps, display, display2       |
| tag   | String | html tag of the heading          | a, `p`                                                                         |
| to    | String | anchor link                      | only accepted when tag is set to `a`                                           |
| color | String | custom text color of the heading | [`all text colors from tailwindcss`](https://tailwindcss.com/docs/text-color/) |

<a name="heading-slots"></a>

## Slots

| Name    | Description             |
| :------ | :---------------------- |
| Default | heading message to show |
