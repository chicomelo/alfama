import{k as M,u as P,l as B}from"./index.7377ee90.js";import{C as K}from"./Blur.edde4939.js";import{C as U}from"./SettingsRow.ac18ea66.js";import{C as L}from"./Index.67b3f099.js";import"./translations.d159963e.js";import{_ as b}from"./_plugin-vue_export-helper.eefbdd86.js";import{_ as e,s as R}from"./default-i18n.20001971.js";import{v as s,o as c,c as k,C as t,l as a,a as v,t as u,x as w,u as i,k as y,b as h}from"./runtime-dom.esm-bundler.5c3c7d72.js";import{R as G}from"./RequiredPlans.7b1460e1.js";import{C as I}from"./Card.7fa0e19d.js";import{C as D}from"./ProBadge.751e0b85.js";import{C as E}from"./Index.a76253da.js";import{C as N}from"./Cta.c0fa9aa4.js";import{u as O}from"./AddonConditions.95ee0498.js";import"./helpers.53868b98.js";import"./Row.df38a5f6.js";import"./Tooltip.73441134.js";import"./CheckSolid.a0a6d7e0.js";import"./index.b359096c.js";import"./Caret.a21d4ca8.js";import"./Slide.39c07c03.js";import"./addons.e43aad76.js";import"./upperFirst.2cd99bdd.js";import"./_stringToArray.f9ddb970.js";import"./toString.f0787db8.js";import"./license.bf6b339a.js";import"./constants.a8a14dc3.js";const C="all-in-one-seo-pack",V={components:{CoreBlur:K,CoreSettingsRow:U,CoreUiElementSlider:L},data(){return{strings:{description:e("Integrating with Google Maps will allow your users to find exactly where your business is located. Our interactive maps let them see your Google Reviews and get directions directly from your site. Create multiple maps for use with multiple locations.",C),apiKey:e("API Key",C),mapPreview:e("Map Preview",C)},displayInfo:{block:{copy:"",desc:""}}}}},q={class:"aioseo-maps-blur"},T={class:"aioseo-settings-row"};function H(x,_,d,r,o,g){const l=s("base-input"),p=s("core-settings-row"),m=s("core-ui-element-slider"),f=s("core-blur");return c(),k("div",q,[t(f,null,{default:a(()=>[v("div",T,u(o.strings.description),1),t(p,{name:o.strings.apiKey,align:""},{content:a(()=>[t(l,{size:"medium"})]),_:1},8,["name"]),t(m,{options:o.displayInfo},null,8,["options"]),t(p,{name:o.strings.mapPreview,align:""},{content:a(()=>[w(u(o.strings.description),1)]),_:1},8,["name"])]),_:1})])}const $=b(V,[["render",H]]),n="all-in-one-seo-pack",z={setup(){return{licenseStore:M(),rootStore:P(),links:B}},components:{Blur:$,RequiredPlans:G,CoreCard:I,CoreProBadge:D,Cta:E},data(){return{features:[e("Google Places Support",n),e("Google Reviews",n),e("Driving Directions",n),e("Multiple Locations",n)],strings:{googleMapsApiKey:e("Google Maps API Key",n),ctaButtonText:e("Unlock Local SEO",n),ctaHeader:R(e("Local SEO is a %1$s Feature",n),"PRO"),ctaDescription:e("Show your location to your visitors using an interactive Google Map. Create multiple maps for use with multiple locations.",n)}}}},F={class:"aioseo-local-maps"};function j(x,_,d,r,o,g){const l=s("core-pro-badge"),p=s("blur"),m=s("required-plans"),f=s("cta"),A=s("core-card");return c(),k("div",F,[t(A,{slug:"localBusinessMapsApiKey",noSlide:!0},{header:a(()=>[v("span",null,u(o.strings.googleMapsApiKey),1),t(l)]),default:a(()=>[t(p),t(f,{"cta-link":r.links.getPricingUrl("local-seo","local-seo-upsell","maps"),"button-text":o.strings.ctaButtonText,"learn-more-link":r.links.getUpsellUrl("local-seo",null,r.rootStore.isPro?"pricing":"liteUpgrade"),"feature-list":o.features,"hide-bonus":!r.licenseStore.isUnlicensed},{"header-text":a(()=>[w(u(o.strings.ctaHeader),1)]),description:a(()=>[t(m,{addon:"aioseo-local-business"}),w(" "+u(o.strings.ctaDescription),1)]),_:1},8,["cta-link","button-text","learn-more-link","feature-list","hide-bonus"])]),_:1})])}const S=b(z,[["render",j]]),J={class:"aioseo-maps"},So={__name:"Maps",setup(x){const _="all-in-one-seo-pack",{shouldShowActivate:d,shouldShowLite:r,shouldShowMain:o,shouldShowUpdate:g}=O({addonSlug:"aioseo-local-business"}),l={googleMapsApiKey:e("Google Maps API Key",_)};return(p,m)=>(c(),k("div",J,[i(o)?(c(),y(i(S),{key:0})):h("",!0),i(g)||i(d)?(c(),y(i(N),{key:1,"card-slug":"localBusinessMapsApiKey","header-text":l.googleMapsApiKey},null,8,["header-text"])):h("",!0),i(r)?(c(),y(i(S),{key:2})):h("",!0)]))}};export{So as default};
