# Delete Confirm

---

-   [Usage](#card-usage)
-   [Props](#card-props)
-   [Slots](#card-slots)
-   [N.B.](#card-note-well)

<a name="card-usage"></a>

## Usage

> <delete-confirm type classes='ml-1 mr-4' title='Are your sure you want to delete?' link='Delete' id=1 idName='category_id' route="http://2020.test/confirm" xdata="{'isOpen': false}">
>    <p>If you delete the record you cannot recover it.</p>
>    <div class="border rounded-lg mt-4">
>        <div class="flex py-2 px-4">
>            <div class="mr-2">Category Name:</div>
>            <div class="flex-1 text-truncate">
>                <p class="mb-0 text-gray-800">Name of the category you wanted to delete</p>
>            </div>
>        </div>
>    </div>
> </delete-confirm>

```php
$route = route('confirm');
$xData = json_encode(['isOpen' => false]);

<s-delete-confirm
    type
    classes='ml-1 mr-4'
    title='Are your sure you want to delete?'
    link='Delete'
    id=1
    idName='category_id'
    :route="$route"
    :xdata="$xData"
>
    <p>If you delete the record you cannot recover it.</p>
    <div class="border rounded-lg mt-4">
        <div class="flex py-2 px-4">
            <div class="mr-2">Category Name:</div>
            <div class="flex-1 text-truncate">
                <p class="mb-0 text-gray-800">Name of the category you wanted to delete</p>
            </div>
        </div>
    </div>
</s-delete-confirm>
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
