<template>
    <div class="pa-2">
        <div v-if="items.length">
            <news-post v-for="(item, index) in items" v-bind:key="index" v-bind:data="item"/>
            <div class="text-center">
                <v-pagination v-model="page" :length="totalPages" prev-icon="mdi-menu-left" next-icon="mdi-menu-right" @input="onPageChange"/>
            </div>
        </div>
        <div v-else v-for="index in per_page" :key="index">
            <v-skeleton-loader type="card-avatar, article, action"/>
        </div>
    </div>
</template>
<script>
    export default {
        data: function() {
            return {
                items : [],
                page : 1,
                totalPages : 0
            }
        },
        props : {
            per_page : {
                type : Number,
                default : 5
            }
        },
        methods : {
            async openPage(page) {
                this.items = [];
                this.page = page;
                let response = await axios.get('http://localhost/api/news?page=' + page + '&per_page=' + this.per_page);
                if ( response && response.data ) {
                    this.totalPages = response.data.meta.last_page;
                    this.items = response.data.data;
                }
            },
            onPageChange(page) {
                this.openPage(page);
            }
        },
        created() {
           this.openPage(this.$route['page'] ?? 1);
        }
    }
</script>
