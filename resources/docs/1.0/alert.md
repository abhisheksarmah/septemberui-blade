# Alert

---

-   [Props](#alert-props)
-   [Slots](#alert-slots)
-   [Primary with Icon](#alert-primary-with-icon)
-   [Danger with Icon](#alert-danger-with-icon)
-   [Success with Icon](#alert-success-with-icon)
-   [Warning with Icon](#alert-warning-with-icon)
-   [Primary without Icon](#alert-primary-without-icon)
-   [Danger without Icon](#alert-danger-without-icon)
-   [Success without Icon](#alert-success-without-icon)
-   [Warning without Icon](#alert-warning-without-icon)

<a name="alert-primary-with-icon"></a>

## Primary with Icon

> <alert with-icon>Please go through septemberui guidelines before you get started. Happy coding ... :)</alert>

```blade
<s-alert withIcon>
    Please go through septemberui guidelines before you get started. Happy coding ... :)
</s-alert>
```

<a name="alert-danger-with-icon"></a>

## Danger with Icon

> <alert variant="danger" with-icon>Please go through septemberui guidelines before you get started. Happy coding ... :)</alert>

```php
<s-alert variant="danger" withIcon>
    Please go through septemberui guidelines before you get started. Happy coding ... :)
</s-alert>
```

<a name="alert-success-with-icon"></a>

## Success with Icon

> <alert variant="success" with-icon>Please go through septemberui guidelines before you get started. Happy coding ... :)</alert>

```php
<s-alert variant="success" withIcon>
    Please go through septemberui guidelines before you get started. Happy coding ... :)
</s-alert>
```

<a name="alert-warning-with-icon"></a>

## Warning with Icon

> <alert variant="warning" with-icon>Please go through septemberui guidelines before you get started. Happy coding ... :)</alert>

```php
<s-alert variant="warning" withIcon>
    Please go through septemberui guidelines before you get started. Happy coding ... :)
</s-alert>
```

<a name="alert-primary-without-icon"></a>

## Primary without Icon

> <alert :with-icon="false">Please go through septemberui guidelines before you get started. Happy coding ... :)</alert>

```php
<s-alert>
    Please go through septemberui guidelines before you get started. Happy coding ... :)
</s-alert>
```

<a name="alert-danger-without-icon"></a>

## Danger without Icon

> <alert variant="danger" :with-icon="false">Please go through septemberui guidelines before you get started. Happy coding ... :)</alert>

```php
<s-alert variant="danger">
    Please go through septemberui guidelines before you get started. Happy coding ... :)
</s-alert>
```

<a name="alert-success-without-icon"></a>

## Success without Icon

> <alert variant="success" :with-icon="false">Please go through septemberui guidelines before you get started. Happy coding ... :)</alert>

```php
<s-alert variant="success">
    Please go through septemberui guidelines before you get started. Happy coding ... :)
</s-alert>
```

<a name="alert-warning-without-icon"></a>

## Warning without Icon

> <alert variant="warning" :with-icon="false">Please go through septemberui guidelines before you get started. Happy coding ... :)</alert>

```php
<s-alert variant="warning">
    Please go through septemberui guidelines before you get started. Happy coding ... :)
</s-alert>
```

<a name="alert-props"></a>

## Props

`default option`

| Name     | Type    | Description           | Accepted                         |
| :------- | ------- | :-------------------- | :------------------------------- |
| withIcon | Boolean | if set, icon is shown | true, `false`                    |
| variant  | String  | status of the alert   | `info`, danger, success, warning |

<a name="alert-slots"></a>

## Slots

| Name    | Description           |
| :------ | :-------------------- |
| Default | alert message to show |
