# Card

---

-   [Usage](#card-usage)
-   [Props](#card-props)
-   [Slots](#card-slots)
-   [N.B.](#card-note-well)

<a name="card-usage"></a>

## Usage

> <card :with-header="true" :with-footer="true">
>   <template v-slot:header>
>       <heading size="heading">Card title goes here</heading>
>   </template>
>   <template v-slot:header-action>
>       <loading-button variant-type="outline" size="small">Edit</loading-button>
>   </template>
>   <template v-slot:footer>
>       <loading-button>Update Password</loading-button>
>   </template>
>   Card body goes here
> </card>

```php
<s-card withHeader="true" classes="mb-6" withFooter="true">
    <slot name='header'>
        <s-heading size="heading">Card title goes here</s-heading>
    </slot>
    <slot name="headerAction">
        <s-button variant-type="outline" size="small">Edit</s-button>
    </slot>
        Card body goes here
    <slot name="footer">
        <s-button>Update Password</s-button>
    </slot>
</s-card>
```

<a name="card-props"></a>

## Props

`default option`

| Name       | Type    | Description                                                      | Accepted      |
| :--------- | :------ | ---------------------------------------------------------------- | ------------- |
| withHeader | Boolean | if set, card header is shown                                     | true, `false` |
| withFooter | Boolean | if set, card footer is shown                                     | true, `false` |
| isPadding  | Boolean | toggle padding of card body                                      | `true`, false |
| classes    | String  | any custom classes to be placed around the card's main container |               |

<a name="card-slots"></a>

## Slots

| Name         | Description              |
| :----------- | :----------------------- |
| Default      | card body to show        |
| header       | used for header title    |
| headerAction | used for any header link |
| footer       | used for footer title    |

<a name="card-note-well"></a>

## N.B.

> <alert with-icon class="mb-2" variant="danger">1. <strong>header</strong> and <strong>headerAction</strong> slots will only work if <strong>withHeader</strong> prop is set to true<br>2. <strong>footer</strong> slot will only work if <strong>withFooter</strong> prop is set to true</alert>
