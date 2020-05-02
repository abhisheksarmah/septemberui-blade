<template>
	<component
		:is="tag"
		:href="to"
		class="border-b-2"
		:class="[
            display,
            {
                'text-blue-600 border-blue-200 hover:text-blue-700 hover:border-blue-400':
                    variant == 'primary',
				'text-red-600 border-red-200 hover:text-red-700 hover:border-red-400':
                    variant == 'danger',
				'text-green-600 border-green-200 hover:text-green-700 hover:border-green-400':
                    variant == 'success',
                'text-orange-600 border-orange-200 hover:text-orange-700 hover:border-orange-400':
                    variant == 'warning',
            }
        ]"
	>
		<slot></slot>
	</component>
</template>

<script>
export default {
	name: "linkto",
	props: {
		variant: {
			type: String,
			default: "primary"
		},
		tag: {
			type: String,
			default: "a"
		},
		to: {
			type: String
		},
		display: {
			type: String,
			default: "inline-flex"
		}
	}
};
</script>
