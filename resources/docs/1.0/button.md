# Button

---

-   [Normal buttons](#button-normal)
-   [Outline buttons](#button-outline)
-   [Props](#button-props)
-   [Slots](#button-slots)
-   [N.B.](#button-note-well)

<a name="button-normal"></a>

## Normal buttons

> <loading-button>Sign In</loading-button>

```php
<s-button
    name='signInButton'
    type='submit'
>Sign In</s-button>
```

> <loading-button variant="success">Sign In</loading-button>

```php
<s-button
    name='signInButton'
    type='submit'
    variant="success"
>Sign In</s-button>
```

> <loading-button variant="danger">Delete Now</loading-button>

```php
<s-button
    name='signInButton'
    type='submit'
    variant="danger"
>Sign In</s-button>
```

> <loading-button variant="warning">Are You Sure?</loading-button>

```php
<s-button
    name='signInButton'
    type='submit'
    variant="warning"
>Sign In</s-button>
```

> <loading-button variant="white">Are You Sure?</loading-button>

```php
<s-button
    name='signInButton'
    type='submit'
    variant="white"
>Sign In</s-button>
```

<a name="button-outline"></a>

## Outline buttons

> <loading-button variant-type='outline'>Sign In</loading-button>

```php
<s-button
    name='signInButton'
    type='submit'
    variantType="outline"
>Sign In</s-button>
```

> <loading-button variant="success" variant-type='outline'>Sign In</loading-button>

```php
<s-button
    name='signInButton'
    type='submit'
    variantType="outline"
    variant="success"
>Sign In</s-button>
```

> <loading-button variant="danger" variant-type='outline'>Sign In</loading-button>

```php
<s-button
    name='signInButton'
    type='submit'
    variantType="outline"
    variant="danger"
>Sign In</s-button>
```

> <loading-button variant="secondary" variant-type='outline'>Sign In</loading-button>

```php
<s-button
    name='signInButton'
    type='submit'
    variantType="outline"
    variant="secondary"
>Sign In</s-button>
```

<a name="button-props"></a>

## Props

`default option`

| Name        | Type   | Description                            | Accepted                                              |
| :---------- | :----- | :------------------------------------- | ----------------------------------------------------- |
| name        | String | name or id of the button               | `submitButton`                                        |
| type        | String | type of the button                     | submit, `button`                                      |
| variant     | String | status of the button                   | success, `primary`, danger, warning, white, secondary |
| variantType | String | normal button or ghost button          | `normal`, outline                                     |
| rounded     | String | border radius of the button            | `medium`, large                                       |
| size        | String | padding of the button                  | `normal`, small                                       |
| classes     | String | classes to be attached with the button |                                                       |

<a name="button-slots"></a>

## Slots

| Name    | Description            |
| :------ | :--------------------- |
| Default | button message to show |

<a name="button-note-well"></a>

## N.B.

> <alert with-icon class="mb-2" variant="danger">1. Provide <strong>classes</strong> prop to <strong>w-full</strong>, if you want a full width button <br>2. Provide <strong>type</strong> prop to <strong>submit</strong>, if you want a submit button<br>3. <strong>white variant</strong> is only available for normal button<br>4. <strong>secondary variant</strong> is only available for outline button</alert>
