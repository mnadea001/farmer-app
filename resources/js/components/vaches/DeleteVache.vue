<template>
    <p>Êtes-vous sur.e ?</p>
    <button
        class="bg-gradient-to-r from-red-50 to-red-300 hover:from-red-500 hover:to-red-500 p-2 hover:font-semibold  rounded-md text-sm my-5 text-gray-700"
        type="button"
        v-on:click="deleteVacheAction"
    >
        Confirmer la suppression
    </button>
</template>
<script setup>
import { onMounted } from "vue";
import useVache from "../../composables/vaches/useVache";

const { getVache, deleteVache } = useVache();

onMounted(() => {
    const segments = window.location.pathname.split("/");
    const vacheId = segments[segments.length - 2];
    getVache(vacheId);
});

const deleteVacheAction = async () => {
    const segments = window.location.pathname.split("/");
    const vacheId = segments[segments.length - 2];
    console.log("hello DeleteVache");
    await deleteVache(vacheId);
};
</script>
