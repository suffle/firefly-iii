"use strict";(self["webpackChunkfirefly_iii"]=self["webpackChunkfirefly_iii"]||[]).push([[2372],{2372:(t,e,i)=>{i.r(e),i.d(e,{default:()=>q});var r=i(9835),s=i(6970);const a={class:"row q-mx-md"},u={class:"col-12"},n={class:"text-h6"},l={class:"row"},o={class:"col-12 q-mb-xs"},d=(0,r._)("br",null,null,-1);function c(t,e,i,c,p,f){const h=(0,r.up)("q-card-section"),g=(0,r.up)("q-card"),w=(0,r.up)("q-page");return(0,r.wg)(),(0,r.j4)(w,null,{default:(0,r.w5)((()=>[(0,r._)("div",a,[(0,r._)("div",u,[(0,r.Wm)(g,{bordered:""},{default:(0,r.w5)((()=>[(0,r.Wm)(h,null,{default:(0,r.w5)((()=>[(0,r._)("div",n,(0,s.zw)(p.group.title),1)])),_:1}),(0,r.Wm)(h,null,{default:(0,r.w5)((()=>[(0,r._)("div",l,[(0,r._)("div",o,[(0,r.Uk)(" Title: "+(0,s.zw)(p.group.title),1),d])])])),_:1})])),_:1})])])])),_:1})}var p=i(1741);const f={name:"Show",data(){return{group:{},id:0}},created(){this.id=parseInt(this.$route.params.id),this.getGroup()},components:{},methods:{onRequest:function(t){this.page=t.page,this.getGroup()},getGroup:function(){let t=new p.Z;t.get(this.id).then((t=>this.parseGroup(t)))},parseGroup:function(t){this.group={title:t.data.data.attributes.title}}}};var h=i(1639),g=i(9885),w=i(4458),_=i(3190),m=i(9984),v=i.n(m);const b=(0,h.Z)(f,[["render",c]]),q=b;v()(f,"components",{QPage:g.Z,QCard:w.Z,QCardSection:_.Z})}}]);