import { ref } from "vue";

export default function () {
    const errors = ref({});
    // const successMessage = ref("");

    const createVache = async (formVacheData) => {
        await axios
            .post('/api/vaches', formVacheData)
            .then((res) => {
                console.log(res);
                errors.value = {};
                window.location.href = '/vaches';
                // successMessage.value = "La vache a été ajoutée avec succès !";
                // formVacheData.name = "";
                // formVacheData.description = "";
            })
            .catch((err) => (errors.value = err.response.data.errors));
    };

    return {
        errors,
        createVache,
        // successMessage,
    };
}
