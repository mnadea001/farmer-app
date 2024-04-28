import { ref } from "vue";

export default function () {
    const errors = ref({});
    const categories = ref([
        { id: 1, name: 'Chien' },
        { id: 2, name: 'Cheval' },
        { id: 3, name: 'Brebis' },
        { id: 4, name: 'Cochon' }
    ]);
    const races = ref([
        { id: 1, name: 'Labrador' },
        { id: 2, name: 'Frison' },
        { id: 3, name: 'Pottok' },
        { id: 4, name: 'Irish Cob' },
        { id: 5, name: 'Mérinos' },
        { id: 6, name: 'Solognotes' }
    ]);

    const createVache = async (formVacheData) => {
        await axios
            .post('/api/vaches', formVacheData)
            .then((res) => {
                console.log(res);
                errors.value = {};
                window.location.href = '/vaches';

            })
            .catch((err) => (errors.value = err.response.data.errors));
    };

    return {
        errors,
        categories,
        races,
        createVache,
    };
}
