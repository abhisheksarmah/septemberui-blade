# Linkto

---

-   [Props](#linkto-props)
-   [Slots](#linkto-slots)
-   [Primary link](#linkto-primary)
-   [Danger link](#linkto-danger)
-   [Success link](#linkto-success)
-   [Warning link](#linkto-warning)

<a name="linkto-primary"></a>

## Primary

> <linkto to="https://tailwindcss.com">This is a primary link</linkto>

```blade
<s-linkto to="https://tailwindcss.com">
    This is a primary link
</s-linkto>
```

<a name="linkto-danger"></a>

## Danger

> <linkto variant="danger" to="https://tailwindcss.com">This is a danger link</linkto>

```php
<s-linkto variant="danger" to="https://tailwindcss.com">
    This is a danger link
</s-linkto>
```

<a name="linkto-success"></a>

## Success

> <linkto variant="success" to="https://tailwindcss.com">This is a success link</linkto>

```php
<s-linkto variant="success" to="https://tailwindcss.com">
    This is a success link
</s-linkto>
```

<a name="linkto-warning"></a>

## Warning

> <linkto variant="warning" to="https://tailwindcss.com">This is a warning link</linkto>

```php
<s-linkto variant="warning" to="https://tailwindcss.com">
    This is a warning link
</s-linkto>
```

<a name="linkto-props"></a>

## Props

`default option`

| Name    | Type   | Description                  | Accepted                                                                                        |
| :------ | ------ | :--------------------------- | :---------------------------------------------------------------------------------------------- |
| variant | String | color of the link            | `primary`, danger, success, warning                                                             |
| to      | String | anchor link                  |                                                                                                 |
| display | String | display property of the link | `inline-flex`, [All display properties from tailwindcss](https://tailwindcss.com/docs/display/) |

<a name="linkto-slots"></a>

## Slots

| Name    | Description            |
| :------ | :--------------------- |
| Default | linkto message to show |
