
<template>
    <div class="ConsultantManagement">
        <searchbar></searchbar>
        <table>
            <tr>
                <th>身分證字號</th>
                <th>姓名</th>
                <th>生日</th>
                <th>手機</th>
                <th>信箱</th>
                <th>狀態</th>
            </tr>
            <tr v-for="(item, index) in items" :key="index">
                <td>{{item.id}}</td>
                <td>{{item.name}}</td>
                <td>{{item.birth}}</td>
                <td>{{item.phone}}</td>
                <td>{{item.mail}}</td>
                <td><i class="fa-solid fa-ban"></i></td>
            </tr>
        </table>
    </div>
</template>

<script>
    import searchbar from '../../components/BackecdSearch.vue'

    export default {
        data(){
            
            return {
                items: [
                { id: 'H124803062', name: '腳踝阿宏', birth: '1995/01/24',phone: '0989541162', mail:"h0989541162@gmail.com" },
                { id: 'H124803062', name: '舞動小敏之腳踝90分', birth: '1995/01/24',phone: '0989541162', mail:"h0989541162@gmail.com" },
                { id: 'H124803062', name: '口頭禪蝦怎麼辦的品諭', birth: '1995/01/24',phone: '0989541162', mail:"h0989541162@gmail.com" },
                { id: 'H124803062', name: '怕被看腳踝的霈霈', birth: '1995/01/24',phone: '0989541162', mail:"h0989541162@gmail.com" },  
                { id: 'H124803062', name: '炫炫', birth: '1995/01/24',phone: '0989541162', mail:"h0989541162@gmail.com" },
                { id: 'H124803062', name: '立偉', birth: '1995/01/24',phone: '0989541162', mail:"h0989541162@gmail.com" },
                { id: 'H124803062', name: '嘉宏', birth: '1995/01/24',phone: '0989541162', mail:"h0989541162@gmail.com" },
                { id: 'H124803062', name: '小敏', birth: '1995/01/24',phone: '0989541162', mail:"h0989541162@gmail.com" },
                { id: 'H124803062', name: '品諭', birth: '1995/01/24',phone: '0989541162', mail:"h0989541162@gmail.com" },
                { id: 'H124803062', name: '娟霈', birth: '1995/01/24',phone: '0989541162', mail:"h0989541162@gmail.com" },
                ],
            }
        },   
        
        methods: {
            
        },

        computed: {
       
        },

        name: 'MemberManagement',
        components: {
            searchbar,
        }
    }
</script>


<style lang="scss">
    // @import '../../../../tgd104-sass/new_style.scss';

    .ConsultantManagement {
        display: flex;
        width: 100%;
        flex-direction: column;
        align-items: flex-end;

    table{
        margin: 0 auto 20px auto;
        border-collapse: collapse;
        width: 90%;
        table-layout: auto;
        font-size: 20px;
        font-weight: bold;
        color: #585858;

        th {
            border-bottom: 2px solid #ddd;
            text-align: left;
            padding: 10px 10px 5px 10px;
            &:nth-child(5){
                width: 340px;
            }
            &:last-child{
                width: 80px;
            }
        }

        td{
            padding: 15px 10px 5px 10px;
            text-align: left;
            &:nth-child(5){
                width: 340px;
            }
            &:last-child{
                width: 80px;
            }
        }
    }
}

</style>