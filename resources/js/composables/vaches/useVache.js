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
    const vache = ref(null);
    const formVacheData = ref({
        name: "",
        description: "",
        price: 0,
        category_id: null,
        race_id: null,
        is_sold: false,
    });

    const getVache = async (vacheId) => {
        try {
            // console.log('id vache dans useVache',vacheId)
            const response = await axios.get(`/api/vaches/${vacheId}`);
            vache.value = response.data.data;
            // console.log('vache value',vache.value)
            // Mise à jour des données de formVacheData
            formVacheData.value.name = response.data.data.name;
            formVacheData.value.description = response.data.data.description;
            formVacheData.value.price = response.data.data.price;
            formVacheData.value.category_id = response.data.data.category_id;
            formVacheData.value.race_id = response.data.data.race_id;
            formVacheData.value.is_sold = response.data.data.is_sold;
            // console.log('useVache form name value',formVacheData.value.name)
        } catch (error) {
            console.error("Error fetching vache details:", error);
        }
    };
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

    const editVache = async (vacheId, formVacheData) => {
        try {
            console.log('hello useVache');
            const response = await axios.patch(`/api/vaches/${vacheId}`, formVacheData.value);
            console.log('response useVache', response);
            errors.value = {};
            window.location.href = '/vaches';
        } catch (err) {
            console.error(err);
            errors.value = err.response.data.errors;
        }
    };

    return {
        errors,
        categories,
        races,
        createVache,
        editVache,
        getVache,
        formVacheData,
    };
}
