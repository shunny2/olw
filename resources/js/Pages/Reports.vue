<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import Table from '@/Components/Table.vue';
import THead from '@/Components/THead.vue';
import TData from '@/Components/TData.vue';
import Dialog from '@/Components/Dialog.vue';

import { TrashIcon } from '@heroicons/vue/24/solid';
import { ArrowDownTrayIcon } from '@heroicons/vue/24/solid';

import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['exports', 'flash']);

</script>

<template>
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <Table :paginator="exports">
                    <template #headColumns>
                        <THead type="first" label="Name"/>
                        <THead type="action" label="Download"/>
                        <THead type="action" label="Delete"/>
                    </template>
                    <template #tableRows>
                        <tr v-for="report in exports.data" :key="report.id">
                            <TData type="first">
                                {{ report.file_name }}
                            </TData>

                            <TData type="action">
                                <a :href="route('reports.show', report.id)"  class="w-14 h-14 flex flex-col items-center mx-auto p-4 bg-blue-600 hover:bg-blue-800 text-white" >
                                    <ArrowDownTrayIcon class="h-6 w-6 text-white" aria-hidden="true" />
                                </a>
                            </TData>

                            <TData type="action">
                                <Link :href="route('reports.destroy', report.id)" method="delete" class="flex mx-auto p-4 bg-red-600 hover:bg-red-800 text-white" as="button">
                                    <TrashIcon class="h-6 w-6 text-white" aria-hidden="true" />
                                </Link>
                            </TData>
                        </tr>
                    </template>
                </Table>
            </div>
            <Dialog :open="flash.success" title="Sucesso!" :description="flash.message" button="Ok!" />
        </div>
    </AuthenticatedLayout>
</template>
