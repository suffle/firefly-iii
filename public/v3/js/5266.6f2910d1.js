"use strict";(self["webpackChunkfirefly_iii"]=self["webpackChunkfirefly_iii"]||[]).push([[5266],{5266:(e,t,a)=>{a.r(t),a.d(t,{default:()=>v});var s=a(9835);const n={key:0,class:"q-ma-md"},o={key:1,class:"q-ma-md"},r={key:2,class:"row q-ma-md"},i={class:"col-12"},l=(0,s._)("div",{class:"text-h6"},"Firefly III",-1),c=(0,s._)("div",{class:"text-subtitle2"},"What's playing?",-1);function u(e,t,a,u,m,f){const d=(0,s.up)("NewUser"),p=(0,s.up)("Boxes"),h=(0,s.up)("q-card-section"),w=(0,s.up)("HomeChart"),y=(0,s.up)("q-card"),g=(0,s.up)("q-fab-action"),b=(0,s.up)("q-fab"),C=(0,s.up)("q-page-sticky"),q=(0,s.up)("q-page");return(0,s.wg)(),(0,s.j4)(q,null,{default:(0,s.w5)((()=>[0===e.assetCount?((0,s.wg)(),(0,s.iD)("div",n,[(0,s.Wm)(d,{onCreatedAccounts:e.refreshThenCount},null,8,["onCreatedAccounts"])])):(0,s.kq)("",!0),e.assetCount>0?((0,s.wg)(),(0,s.iD)("div",o,[(0,s.Wm)(p)])):(0,s.kq)("",!0),e.assetCount>0?((0,s.wg)(),(0,s.iD)("div",r,[(0,s._)("div",i,[(0,s.Wm)(y,{bordered:""},{default:(0,s.w5)((()=>[(0,s.Wm)(h,null,{default:(0,s.w5)((()=>[l,c])),_:1}),(0,s.Wm)(h,null,{default:(0,s.w5)((()=>[(0,s.Wm)(w)])),_:1})])),_:1})])])):(0,s.kq)("",!0),e.assetCount>0?((0,s.wg)(),(0,s.j4)(C,{key:3,position:"bottom-right",offset:[18,18]},{default:(0,s.w5)((()=>[(0,s.Wm)(b,{label:"Actions",square:"","vertical-actions-align":"right","label-position":"left",color:"green",icon:"fas fa-chevron-up",direction:"up"},{default:(0,s.w5)((()=>[(0,s.Wm)(g,{color:"primary",square:"",icon:"fas fa-chart-pie",label:"New budget",to:{name:"budgets.create"}},null,8,["to"]),(0,s.Wm)(g,{color:"primary",square:"",icon:"far fa-money-bill-alt",label:"New asset account",to:{name:"accounts.create",params:{type:"asset"}}},null,8,["to"]),(0,s.Wm)(g,{color:"primary",square:"",icon:"fas fa-exchange-alt",label:"New transfer",to:{name:"transactions.create",params:{type:"transfer"}}},null,8,["to"]),(0,s.Wm)(g,{color:"primary",square:"",icon:"fas fa-long-arrow-alt-right",label:"New deposit",to:{name:"transactions.create",params:{type:"deposit"}}},null,8,["to"]),(0,s.Wm)(g,{color:"primary",square:"",icon:"fas fa-long-arrow-alt-left",label:"New withdrawal",to:{name:"transactions.create",params:{type:"withdrawal"}}},null,8,["to"])])),_:1})])),_:1})):(0,s.kq)("",!0)])),_:1})}a(702);var m=a(3836),f=a(1049);const d=(0,s.aZ)({name:"PageIndex",components:{Boxes:(0,s.RC)((()=>Promise.all([a.e(4736),a.e(8044)]).then(a.bind(a,8044)))),HomeChart:(0,s.RC)((()=>Promise.all([a.e(4736),a.e(7480)]).then(a.bind(a,7480)))),NewUser:(0,s.RC)((()=>Promise.all([a.e(4736),a.e(3064),a.e(1543)]).then(a.bind(a,1543))))},data(){return{assetCount:1}},computed:{...(0,f.Se)("fireflyiii",["getCacheKey"])},mounted(){this.countAssetAccounts()},methods:{refreshThenCount:function(){this.$store.dispatch("fireflyiii/refreshCacheKey"),this.countAssetAccounts()},countAssetAccounts:function(){let e=new m.Z;e.list("asset",1,this.getCacheKey).then((e=>{this.assetCount=parseInt(e.data.meta.pagination.total)}))}}});var p=a(1639),h=a(9885),w=a(4458),y=a(3190),g=a(3388),b=a(9361),C=a(935),q=a(9984),k=a.n(q);const W=(0,p.Z)(d,[["render",u]]),v=W;k()(d,"components",{QPage:h.Z,QCard:w.Z,QCardSection:y.Z,QPageSticky:g.Z,QFab:b.Z,QFabAction:C.Z})}}]);