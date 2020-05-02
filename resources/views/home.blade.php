@extends('layouts.one.master')

@section('content') 
            <div class="flex md:flex-1 -mx-4 mb-10 flex-wrap">
                <div class="w-1/2 md:w-1/4 px-4 mb-4 md:mb-0">
                    <s-card>
                        <div class="flex items-center">
                            <div
                                class="rounded-full bg-blue-100 flex-no-shrink w-16 h-16 inline-flex items-center justify-center mr-4 flex-none"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-blue-600"
                                >
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>
                            </div>
                            <div>
                                <s-heading size="small-caps" class="mb-2">Total Clients</s-heading>
                                <s-heading size="heading2">09</s-heading>
                            </div>
                        </div>
                    </s-card>
                </div>
                <div class="w-1/2 md:w-1/4 px-4 mb-4 md:mb-0">
                    <s-card>
                        <div class="flex items-center">
                            <div
                                class="rounded-full bg-blue-100 flex-no-shrink w-16 h-16 inline-flex items-center justify-center mr-4 flex-none"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-blue-600"
                                >
                                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z" />
                                    <line x1="12" y1="11" x2="12" y2="17" />
                                    <line x1="9" y1="14" x2="15" y2="14" />
                                </svg>
                            </div>
                            <div>
                                <s-heading size="small-caps" class="mb-2">Total Projects</s-heading>
                                <s-heading size="heading2">24</s-heading>
                            </div>
                        </div>
                    </s-card>
                </div>
                <div class="w-1/2 md:w-1/4 px-4 mb-4 md:mb-0">
                    <s-card>
                        <div class="flex items-center">
                            <div
                                class="rounded-full bg-blue-100 flex-no-shrink w-16 h-16 inline-flex items-center justify-center mr-4 flex-none"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-blue-600"
                                >
                                    <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z" />
                                    <line x1="12" y1="11" x2="12" y2="17" />
                                    <line x1="9" y1="14" x2="15" y2="14" />
                                </svg>
                            </div>
                            <div>
                                <s-heading size="small-caps" class="mb-2">Open Project</s-heading>
                                <s-heading size="heading2">37</s-heading>
                            </div>
                        </div>
                    </s-card>
                </div>
                <div class="w-1/2 md:w-1/4 px-4 mb-4 md:mb-0">
                    <s-card>
                        <div class="flex items-center">
                            <div
                                class="rounded-full bg-blue-100 w-16 h-16 inline-flex items-center justify-center mr-4 flex-none"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="text-blue-600"
                                >
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                                    <polyline points="14 2 14 8 20 8" />
                                    <line x1="16" y1="13" x2="8" y2="13" />
                                    <line x1="16" y1="17" x2="8" y2="17" />
                                    <polyline points="10 9 9 9 8 9" />
                                </svg>
                            </div>
                            <div>
                                <s-heading size="small-caps" class="mb-2">Upcoming Invoice</s-heading>
                                <s-heading size="heading2">09</s-heading>
                            </div>
                        </div>
                    </s-card>
                </div>
            </div>

            {{-- <basic-table :headings="tableHeadings" theme="striped">
                <tr
                    v-for="(data, dataIndex) in datas"
                    :key="dataIndex"
                    class="focus-within:bg-gray-200 overflow-hidden"
                >
                    <td class="border-t">
                        <span class="text-gray-700 px-6 py-4 flex items-center">{{ data.invoice }}</span>
                    </td>
                    <td class="border-t">
                        <span class="text-gray-700 px-6 py-4 flex items-center">{{ data.name }}</span>
                    </td>
                    <td class="border-t">
                        <span class="text-gray-700 px-6 py-4 flex items-center">{{ data.date }}</span>
                    </td>
                    <td class="border-t">
                        <span
                            class="text-gray-700 px-6 py-4 flex items-center justify-end"
                        >{{ formatCurrency(data.amount) }}</span>
                    </td>
                    <td class="border-t">
                        <span class="px-6 py-4 flex items-center">
                            <badge variant="danger" v-if="data.status == 'Declined'">{{ data.status }}</badge>
                            <badge variant="success" v-if="data.status == 'Completed'">{{ data.status }}</badge>
                            <badge variant="warning" v-if="data.status == 'Pending'">{{ data.status }}</badge>
                        </span>
                    </td>
                </tr>
            </basic-table> --}} 
    <div class="flex items-center">
        <div class="md:w-1/2 md:mr-auto"> 
            <s-card withHeader="true" classes="mb-12">
                <slot name='header'>
                    <s-heading size='large'>
                        Your Dashboard goes here
                    </s-heading> 
                </slot> 
                <s-alert classes="mb-6">
                    Please go through septemberui guidelines before you get started. Happy coding... :)
                </s-alert> 
                <s-alert variant="danger" withIcon>
                    Please go through septemberui guidelines before you get started. Happy coding... :)
                </s-alert> 
                <s-alert variant="warning" withIcon>
                    Please go through septemberui guidelines before you get started. Happy coding... :)
                </s-alert> 
                <s-alert variant="success" withIcon>
                    Please go through septemberui guidelines before you get started. Happy coding... :)
                </s-alert> 
            </s-card> 
            <s-card withHeader="true" classes="mb-6" withFooter="true">
                <slot name='header'>
                    <s-heading size="heading" tag="a" to="/docs">Go to Docs</s-heading>
                </slot>
                <slot name="headerAction">
                    <s-button variantType="outline" size="small">Edit</s-button>
                </slot>
                    Card body goes here
                <slot name="footer">
                    <s-button>Update Password</s-button>
                </slot>
            </s-card>
            <s-heading size="heading" tag="a" to="https://tailwindcss.com/">
                Tailwindcss
            </s-heading>
            <s-linkto variant="danger" to="https://tailwindcss.com">
                This is a danger link
            </s-linkto> 
            @php
                $route = route('confirm');
                $xData = json_encode(['isOpen' => false]); 
            @endphp
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
                <p>If you delete the record you can't recover it.</p>
                <div class="border rounded-lg mt-4">
                    <div class="flex py-2 px-4">
                        <div class="mr-2">Category Name:</div>
                        <div class="flex-1 text-truncate">
                            <p class="mb-0 text-gray-800">Name of the category you wanted to delete</p>
                        </div>
                    </div>
                </div>
            </s-delete-confirm>
            <div x-data='{ open: false }'>
            <button @click='open = true'>Open Dropdown</button>
            <ul x-show='open' @click.away='open = false'>Dropdown Body</ul>
            </div>
        </div>
    </div>
@endsection
