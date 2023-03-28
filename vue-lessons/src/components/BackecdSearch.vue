
<template>
    <div class="MemberContainer">
        <div class="SearchBar">
            <input id="search-input" placeholder="請輸入身分證字號">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'searchbar',
        data(){
            return {
                
            }
        }
    }


</script>


<style lang="scss">

    .MemberContainer {
        display: flex;
        width: 100%;
        flex-direction: column;
        align-items: flex-end;

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