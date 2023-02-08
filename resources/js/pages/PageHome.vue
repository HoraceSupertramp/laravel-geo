<template>
    <div class="container">
        <h1>Countries</h1>
        <div class="row" v-if="countries != null">
            <div v-for="country in countries" :key="country.id" class="col-lg-4 col-md-6 col-sm-12 gy-3">
                <div class="card h-100">
                    <div class="card-body pb-0">
                        <h5 class="card-title">
                            {{ country.name }}
                            <small class="text-muted">({{ country.code }})</small>
                        </h5>
                      <h6>{{ country.local_name }}</h6>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table table-sm mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">Continent</th>
                                    <td>{{ country.continent }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Region</th>
                                    <td>{{ country.region }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Surface</th>
                                    <td>{{ country.surface_area }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Population</th>
                                    <td>{{ country.population }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Life Expectancy</th>
                                    <td>{{ country.life_expectancy }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Government form</th>
                                    <td>{{ country.government_form }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            countries: null,
        }
    },
    created() {
        axios.get('/api/countries')
            .then(response => this.countries = response.data.results);
 }
}
</script>

<style lang="scss" scoped>
</style>
