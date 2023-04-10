<template>
    <div>
      <ul>
          <li v-for="item in datas.slice(pageStart, pageEnd)">
            {{ item }}
          </li>
      </ul>
      <!-- //pagination -->
      <ul class="pagination">
        <li class="page-item" @click.prevent="setPage(currentPage-1)">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item" :class="{'active': (currentPage === (n))}"
          v-for="(n, index) in totalPage" :key="index" @click.prevent="setPage(n)">
          <a class="page-link" href="#">{{ n }}</a>
        </li>
        <li class="page-item" @click.prevent="setPage(currentPage+1)">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </div>
</template>
<script setup></script>

<script>
    import searchbar from '../components/BackecdSearch.vue'
    

    export default {
        name: 'test',
        data(){ 
            return {
                datas: [
                    { id: '2023022000', tr_category: 'travel',name: '舞動小敏之腳踝90分', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: 'travel',name: '怕被看腳踝的霈霈', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: 'travel',name: '炫炫', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: 'travel',name: '立偉', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: 'travel',name: '嘉宏', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: 'travel',name: '小敏', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: 'learing',name: '品諭', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '完成', },
                    { id: '2023022000', tr_category: 'learing',name: '娟霈', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: 'learing',name: '舞動小敏之腳踝90分', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: 'learing',name: '口頭禪蝦怎麼辦的品諭', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: 'learing',name: '炫炫', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                    { id: '2023022000', tr_category: 'learing',name: '立偉', tr_cost: '2023/03/01',tro_booking_data: '2023/03/19',tro_order_data: '未完成', },
                ],//要呈現的資料
                perpage: 10, //一頁的資料數
                currentPage: 1
            }
        },   
        
        methods: {
          setPage(page) {
            if(page <= 0 || page > this.totalPage) {
              return
            }
            this.currentPage = page
          }
        },

        computed: {
          totalPage() {
          return Math.ceil(this.datas.length / this.perpage)
          //Math.ceil()取最小整數
          },
          pageStart() {
              return (this.currentPage - 1) * this.perpage
              //取得該頁第一個值的index
          },
          pageEnd() {
              return this.currentPage * this.perpage
              //取得該頁最後一個值的index
          }
        },

        components: {
            searchbar,
        }
    }

</script>


   
