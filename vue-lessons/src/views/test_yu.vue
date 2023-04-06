<template>
    <div class="calendar">
        <!-- <span @click="previousMonth">上一個月</span> -->
        <div class="booking_data">
            <i @click="previousMonth" class="fa-solid fa-caret-left"></i>
            <span>{{ currentDate.getFullYear() }} 年 {{ currentDate.getMonth() + 1 }} 月</span>
            <!-- <span @click="nextMonth">下一個月</span> -->
            <i @click="nextMonth" class="fa-solid fa-caret-right"></i>
        </div>
      <table>
        <thead>
          <tr>
            <th v-for="(day, index) in daysOfWeek" :key="index">{{ day }}</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(week, weekIndex) in weeks" :key="weekIndex">
            <td
              v-for="(date, dateIndex) in week"
              :key="dateIndex"
              :class="{ today: isToday(date), selected: isSelected(date), selectable: isSelectable(date) }"
              @click="selectDate(date)"
            >
              {{ date.getDate() }}
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  export default {
    name:"test_yu",
    data() {
      return {
        selectedDate: null,
        daysOfWeek: ["日", "一", "二", "三", "四", "五", "六"],
        weeks: [],
        currentDate: new Date(),
        minSelectableDate: new Date(new Date().setDate(new Date().getDate() + 5)),
        maxSelectableDate: new Date(new Date().setDate(new Date().getDate() + 30)),
      };
    },
    mounted() {
      this.generateCalendar();
    },
    methods: {
        nextMonth() {
    let nextMonth = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() + 1, 1);
    this.currentDate = nextMonth;
    this.generateCalendar();
  },
  previousMonth() {
      let previousMonth = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() - 1, 1);
      this.currentDate = previousMonth;
      this.generateCalendar();
    },
      generateCalendar() {
        let weeks = [];
        let month = this.currentDate.getMonth();
        let year = this.currentDate.getFullYear();
        let firstDay = new Date(year, month, 1);
        let lastDay = new Date(year, month + 1, 0);
        let startDay = firstDay.getDay();
        let endDay = lastDay.getDay();
        let days = lastDay.getDate();
  
        let paddingDays = startDay == 0 ? 7 : startDay;
        let totalDays = days + paddingDays + (7 - endDay - 1);
        for (let i = 1; i <= totalDays; i++) {
          let date = new Date(year, month, i - paddingDays);
          weeks.push(date);
        }
        this.weeks = [];
        for (let i = 0; i < weeks.length; i += 7) {
          this.weeks.push(weeks.slice(i, i + 7));
        }
      },
      isToday(date) {
        return date.toDateString() === new Date().toDateString();
      },
      isSelected(date) {
        return this.selectedDate && date.toDateString() === this.selectedDate.toDateString();
      },
      isSelectable(date) {
        return date >= this.minSelectableDate && date <= this.maxSelectableDate;
      },
      selectDate(date) {
        // 將選擇的日期存儲在一個變量中，然後在需要保存到資料庫的地方使用該變量即可
        if (this.isSelectable(date)) {
          this.selectedDate = date;
        }
      },
    },
  };
  </script>
  
  <style>
  /* .calendar {
    display: flex;
    flex-direction: column;
    align-items: center;
} */

.calendar table{
    font-size: 20px;
    font-weight: 600;
    margin-left:auto; 
    margin-right:auto;
    text-align: center;
    color: #585858;
}

.calendar tbody{
    background-color: #c5c5c5;
    color: #888888;
}

.calendar td {
  padding: 20px 50px;
  text-align: center;
  border: 2px solid #ffffff;
  margin: 5px;
}

.calendar th{
    padding: 20px 0;
}

.calendar .today {
  background-color: #FAEECD;
}



.calendar .selectable:hover {
  cursor: pointer;
  background-color: #ebc43a;
  transition: .5s ease;
}

.calendar .selectable{
    color: #585858;
    background-color: #FFE59D;
}

.calendar .unselectable {
  color: #ccc;
  background-color: #f5f5f5;
}

.calendar span {
  user-select:none; /* standard syntax */
  -webkit-user-select:none; /* for Chrome、Safari */
  -moz-user-select:none; /* for Mozilla、Firefox */
  display: inline;
}

/* .calendar {
display: flex;
align-items: center;
justify-content: space-between;
} */

.calendar .fa-caret-left,
.calendar .fa-caret-right {
    display: inline-block;
}

.calendar span,
.calendar i {
display: inline-block;
margin: 0 1em;
font-size: 24px;
font-weight: 600;
cursor: pointer;
color: #585858;
}

.booking_data{
    margin: 100px auto 30px auto;
    text-align: center;
}

.calendar .selected {
  background-color: #ebc43a;
}
/* ----------螢幕小於900px時---------- */
@media screen and (max-width: 900px){
    .calendar table{
        font-size: 18px;
    }
    .calendar td{
        padding: 20px;
    }
    .booking_data{
        margin: 50px auto 0 auto;
    }
  }

  /* ----------螢幕小於450px時---------- */
@media screen and (max-width: 450px){
    .calendar table{
        font-size: 16px;
    }
    .calendar td{
        padding: 10px;
    }
    .booking_data{
        margin: 30px auto 0 auto;
    }
    .calendar th{
        padding: 10px 0;
    }
  }
</style>


