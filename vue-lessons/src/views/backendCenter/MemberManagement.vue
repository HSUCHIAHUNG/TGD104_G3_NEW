
<template>
    <div class="MemberContainer">
        <div class="SearchBar">
            <input id="search-input" placeholder="請輸入身分證字號">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        
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
    export default {
        data(){
            return {
                items: [
                { id: 'H124803062', name: '腳踝阿宏', birth: '1995/01/24',phone: '0989541162', mail:"h0989541162@gmail.com" },
                { id: 'H124803062', name: '舞動小敏', birth: '1995/01/24',phone: '0989541162', mail:"h0989541162@gmail.com" },
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
    }
</script>


<style lang="scss">

    .MemberContainer {
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

    .SearchBar {
            display: flex;
            justify-content: flex-end;
            position: relative;
            width: fit-content;
            margin: 20px 70px 20px 0px;
            
        input {
            border-radius: 5px;
            border: none;
            background-color: #FAEECD;
            padding: 10px 0px 10px 35px; // 预留图标位置的空间
            box-sizing: border-box;
            &::placeholder{
                color: #9E9E9E;
                text-align: center;
                line-height: 35.33px;
                font-weight: 500;
                font-size: 13px;
                padding-right: 35px;
            }
        }

        i {
            position: absolute;
            top: 50%;
            left: 7px;
            transform: translateY(-50%);
            color: #FF7426;
            font-size: 18px;
            font-weight: bold;
        }
    }
  }

  

</style>