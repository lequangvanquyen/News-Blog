(self.__LOADABLE_LOADED_CHUNKS__=self.__LOADABLE_LOADED_CHUNKS__||[]).push([[41160],{619937:(e,t,s)=>{s.d(t,{$N:()=>P,GY:()=>S,MZ:()=>T,NR:()=>N,Vn:()=>C,fm:()=>n,kM:()=>a,q6:()=>r,qp:()=>A,uV:()=>p,vJ:()=>R});const n={DOWNLOAD_TEMPLATE:"DOWNLOAD_TEMPLATE",UPLOAD_TEMPLATE:"UPLOAD_TEMPLATE",HISTORY:"HISTORY",RESOURCES:"RESOURCES"},r={GENERAL:"GENERAL",CAMPAIGNS:"CAMPAIGNS",AD_GROUPS:"AD_GROUPS",ADS:"ADS",KEYWORDS:"KEYWORDS",PRODUCT_GROUPS:"PRODUCT_GROUPS",ERROR_CODES:"ERROR_CODES"},a={BILLING_HISTORY:"BILLING_HISTORY",BILLING_FORMS:"BILLING_FORMS",ORDER_LINES:"ORDER_LINES",PROMOTIONS:"PROMOTIONS",DOCUMENTS:"DOCUMENTS"},o="Shopify",c="WordPress",i="WooCommerce",u="Weebly",E="Tealium",d="Magento",_="Squarespace",O="Ecwid",l="Bigcommerce",T={GOOGLE_TAG_MANAGER:"Google Tag Manager",SHOPIFY:"Shopify",WOO_COMMERCE:"WooCommerce",WORDPRESS:"WordPress",SQUARESPACE:"Squarespace",WEEBLY:"Weebly",TEALIUM:"Tealium",MAGENTO:"Magento",ECWID:"Ecwid",BIG_COMMERCE:"BigCommerce"},R={["Google Tag Manager"]:T.GOOGLE_TAG_MANAGER,[o]:T.SHOPIFY,[i]:T.WOO_COMMERCE,[c]:T.WORDPRESS,[_]:T.SQUARESPACE,[u]:T.WEEBLY,[E]:T.TEALIUM,[d]:T.MAGENTO,[O]:T.ECWID,[l]:T.BIG_COMMERCE},A={PINTEREST_TAG:"PINTEREST_TAG",PINTEREST_TAG_EVENTS:"PINTEREST_TAG_EVENTS",PINTEREST_TAG_HISTORY:"PINTEREST_TAG_HISTORY",PINTEREST_TAG_HEALTH:"PINTEREST_TAG_HEALTH",CONVERSION_UPLOAD:"CONVERSION_UPLOAD",UPLOAD_HISTORY:"UPLOAD_HISTORY",PCA_UPLOAD_HISTORY:"PCA_UPLOAD_HISTORY",PCA_UPLOAD:"PCA_UPLOAD",CONVERSIONS_API:"CONVERSIONS_API",CONVERSIONS_API_ACCESS_TOKEN:"CONVERSIONS_API_ACCESS_TOKEN"},S={PINTEREST_TAG_DASHBOARD:"PINTEREST_TAG_DASHBOARD",PINTEREST_TAG_LANDING:"PINTEREST_TAG_LANDING",PINTEREST_TAG_INSTRUCTIONS:"PINTEREST_TAG_INSTRUCTIONS",PINTEREST_TAG_HISTORY:"PINTEREST_TAG_HISTORY",CONVERSION_UPLOAD_LANDING:"CONVERSION_UPLOAD_LANDING",CONVERSION_UPLOAD_VALIDATION:"CONVERSION_UPLOAD_VALIDATION",CONVERSION_UPLOAD_HISTORY:"CONVERSION_UPLOAD_HISTORY",PCA_UPLOAD_HISTORY:"PCA_UPLOAD_HISTORY",PCA_UPLOAD_LANDING:"PCA_UPLOAD_LANDING",PCA_UPLOAD_VALIDATION:"PCA_UPLOAD_VALIDATION"},C={UNREAD:"UNREAD",READ:"READ",ACCEPTED:"ACCEPTED",REJECTED:"REJECTED",DISMISSED:"DISMISSED",INVALID:"INVALID",MUTED:"MUTED",SNOOZED:"SNOOZED",PMP_REPORTED:"PMP_REPORTED",EMAILED:"EMAILED",BULK_DOWNLOADED:"BULK_DOWNLOADED",FILTERED:"FILTERED",PUSHED:"PUSHED"},N={ATTRIBUTION_DESTINATION:"destination",ATTRIBUTION_EXPIRY:"expiry",ATTRIBUTION_SOURCE:"attributionsrc",ATTRIBUTION_SOURCE_EVENT_ID:"source_event_id"},p=604800,P={ATTRIBUTION_SOURCE_ID:"attributionsourceid",ATTRIBUTE_DESTINATION:"attributiondestination",ATTRIBUTE_ON:"attributeon"}},768559:(e,t,s)=>{s.d(t,{Z:()=>c});var n=s(826067);const r=/\/today\/(article|best|trending)\/[\w-]+\/(\d+)/,a=(e,t)=>t?e.substring(t.length).split("/")[0]:e,o=(e,t,s,o)=>{var c;if(!e)return"";let i="";const u=t.board&&t.board.url;switch(e){case"/":case"/homefeed/":return"UserHomefeedResource";case t.pinner&&`/${t.pinner.username}/pins/`:return"UserPinsResource";case t.pinner&&`/${t.pinner.username}/`:case/\/_activity\//.test(e)&&e:return"UserActivityPinsResource";case/\/_created\//.test(e)&&e:return t.story_pin_data_id?"UserStoryPinsFeedResource":"UserActivityPinsResource";case/\/_community\//.test(e)&&e:return"UserDiscoveredPinsResource";case/\/_shop\//.test(e)&&e:return"StoreFrontFeedResource";case/\/_saved\//.test(e)&&e:return"BoardlessPinsResource";case t.pinner&&`/${t.pinner.username}/_shopping_list/`:return"ShoppingListFeedResource";case/\/visual-search\//.test(e)&&e:return"VisualLiveSearchResource";case/\/pin\//.test(e)&&e:i="/pin/";const E=a(e,i);if(t.id!==E)return t.call_to_create_source_pin_id?`ApiResource_callToCreatePins_${E}`:`RelatedPinFeedResource_${E}`;break;case/\/search\//.test(e)&&e:if(s){return`SearchResource_${((0,n.mB)(s,{shouldDecode:!1}).q||"").toLowerCase()}`}if(o)return`SearchResource_${encodeURIComponent(o.q||"").toLowerCase()}`;break;case/\/discover\/article\//.test(e)&&e:i="/discover/article/";return`ExploreArticleResource_${a(e,i)}`;case/\/categories\//.test(e)&&e:i="/categories/";return`CategoryFeedResource_${a(e,i)}`;case/\/discover\/topics\//.test(e)&&e:return"CategoryFeedResource";case/\/news_hub\//.test(e)&&e:i="/news_hub/";return`NewsHubDetailsResource_${a(e,i)}`;case/\/_tools\/more-ideas\//.test(e)&&e:return"BoardContentRecommendationResource";case/\/topics\//.test(e)&&e:i="/topics/";return`TopicFeedResource_${a(e,i)}`;case t.pinner&&`/${t.pinner.username}/products/`:return"StoreFrontFeedResource";case/\/source\//.test(e)&&e:i="/source/";return`DomainFeedResource_${a(e,i)}`;case/\/explore\//.test(e)&&e:i="/explore/";return`SearchResource_${a(e,i)}`;case u:case!!u&&/\/more_ideas\//.test(e)&&e:return"BoardFeedResource";case u&&e.indexOf(u)>-1&&e:return"BoardSectionPinsResource";case/\/following\//.test(e)&&e:return"FollowingFeedResource";case/\/brand_catalog\//.test(e)&&e:return"BrandCatalogFeedResource";case r.test(e)&&e:return`TodayArticleFeedResource_${(null===(c=e.match(r))||void 0===c?void 0:c[2])||"unknown"}`;case/\/today\//.test(e):return"TodayTabResource";case/\story_feed\//.test(e)&&e:if(s){const{feed_type:e,request_params:t}=(0,n.mB)(s);return`StoryFeedResource_${e}_${t}`}break;case/\/your-shop\//.test(e)&&e:return"PersonalBoutiqueResource"}return""},c=(e,t,s)=>{if(!e||!e.tracking_params||!t)return;if(!e.tracking_params_map)return`${e.tracking_params}~0`;const{pathname:n,search:r,query:a}=t,c=o(n,e,r,a),i=e.tracking_params_map||{},u=Object.keys(i);let E;if((n||"").startsWith("/pin/")){const e=u.find((e=>"PinResource"!==e));E=e?i[e]:i.PinResource}else E=i[c];let d;if(!E&&s&&s.length){const t=(e=>{let t=null==e?void 0:e.pathname;return t?(t.match(/\/search\//)&&null!=e&&e.search&&(t+=e.search),t.toLowerCase()):""})(s[s.length-1].location);d=o(t,e,r,a),E=i[d]}return E||(E=`${e.tracking_params||""}~0`),E}},966476:(e,t,s)=>{s.d(t,{Z:()=>r});var n=s(667294);const r=()=>{const[e,t]=(0,n.useState)(!1);return(0,n.useEffect)((()=>{t(!0)}),[]),e}},813401:(e,t,s)=>{s.d(t,{kf:()=>R,l5:()=>l,of:()=>_,xC:()=>T,yz:()=>O});var n=s(667294),r=s(172071),a=s(829407),o=s(807609),c=s(30287),i=s(425288),u=s(785893);const{Provider:E,useMaybeHook:d}=(0,i.Z)("PwaContext"),_=({children:e,initialContext:t})=>{const[s,o]=(0,n.useState)(null),i=t||{pwaType:"unknown",twaType:null},d=i.pwaType;(0,a.Z)((()=>{const e=(0,c.FB)(window)||"unknown";o(e),d!==e&&r.Z.increment("pwa.type_mismatch",1,{serverPwaType:d,clientPwaType:e,conflict:"unknown"!==d&&"unknown"!==e})}));const _="unknown"===d&&s?s:d,O=i.twaType,l=(0,n.useMemo)((()=>({pwaType:_,twaType:O})),[_,O]);return(0,u.jsx)(E,{value:l,children:e})},O=()=>{var e;const t=d();return null!==(e=null==t?void 0:t.pwaType)&&void 0!==e?e:"unknown"},l=()=>{var e;const t=d();return null!==(e=null==t?void 0:t.twaType)&&void 0!==e?e:null},T=()=>"android-twa"===O(),R=()=>{const e=O(),t=(0,o.Z)();return"unknown"===e&&t?null:"windows"===e}},864537:(e,t,s)=>{s.d(t,{Jc:()=>c,NO:()=>o,R3:()=>a,ge:()=>E,th:()=>i});var n=s(643913);const r=["and","that","but","or","as","if","when","than","because","while","where","after","so","though","since","until","whether","before","although","nor","like","once","unless","now","except","the","a","an","san","for","in","with"],a={AUTO_COMPLETE_DEFAULT:"query",AUTO_COMPLETE_HASHTAG:"hashtag",AUTO_COMPLETE_RECENT_SEARCH:"recent_query",AUTO_COMPLETE_RECOMMENDED_SEARCH:"recommended_query",AUTO_COMPLETE_TRENDING:"trending",TYPO_AUTO_CORRECT_ORIGINAL:"typo_auto_original",USER_INPUT:"typed",SEARCH_GUIDE:"add_refine"};function o(e){return(e||"").trim().replace(/\s+/g," ")}function c({type:e,term:t="",index:s}){switch(e){case a.USER_INPUT:case a.AUTO_COMPLETE_HASHTAG:case a.TYPO_AUTO_CORRECT_ORIGINAL:return`${t}|${e}`;case a.AUTO_COMPLETE_DEFAULT:return`${t}|autocomplete|${s}`;case a.AUTO_COMPLETE_RECENT_SEARCH:return`${t}|recentsearch|${s}`;case a.AUTO_COMPLETE_TRENDING:return`${t}|trending|${s}`;case a.AUTO_COMPLETE_RECOMMENDED_SEARCH:return`${t}|recommended|${s}`;case a.SEARCH_GUIDE:return`${t}|guide|word|${s}`;default:return""}}function i({queryStates:e}){return 0===e.length?"":"&"+(0,n.Z)({term_meta:e.map((e=>c(e)))})}function u(e){if(e){const t=e.trim().split(/\s+/);return t.find((e=>r.includes(e.toLowerCase())))?[e]:t}return[]}function E({type:e,query:t="",index:s}){switch(e){case a.USER_INPUT:case a.AUTO_COMPLETE_HASHTAG:case a.TYPO_AUTO_CORRECT_ORIGINAL:return u(t).map((t=>({index:s,term:t,type:e})));case a.AUTO_COMPLETE_RECENT_SEARCH:case a.AUTO_COMPLETE_RECOMMENDED_SEARCH:case a.AUTO_COMPLETE_TRENDING:case a.AUTO_COMPLETE_DEFAULT:return u(t).map((t=>({term:t,type:e,index:s})));default:return[]}}},807609:(e,t,s)=>{s.d(t,{Z:()=>a});var n=s(411465),r=s(966476);const a=()=>{const e=(0,n.Z)(),t=(0,r.Z)();return e&&!t}},411465:(e,t,s)=>{s.d(t,{G:()=>c,Z:()=>i});var n=s(667294),r=s(925927),a=s(785893);const o=(0,n.createContext)(!0);function c({children:e}){const t=(0,r.TH)(),[s,c]=(0,n.useState)(!0),i=(0,n.useRef)(t);return(0,n.useEffect)((()=>{i.current!==t&&(i.current=t,c(!1))}),[t]),(0,a.jsx)(o.Provider,{value:s,children:e})}function i(){return(0,n.useContext)(o)}},479301:(e,t,s)=>{s.d(t,{i5:()=>N,sX:()=>P,Z5:()=>C,NG:()=>p,MT:()=>I});var n=s(667294),r=s(6637),a=s(802201),o=s(682492),c=s.n(o);const i=(e,t)=>e.data[t]&&e.data[t].messages||[];function u(e,t){const s={};return e.filter((e=>!!e)).reduce(((e,n)=>{const r=t(n);return s[r]?(c()(s[r],n),e):(s[r]=n,e.concat([n]))}),[])}function E(e){return[...e].sort(((e,t)=>new Date(e.created_ms||e.created_at)-new Date(t.created_ms||t.created_at)))}function d(e,t,s){let n=i(e,t).concat(s);return n=u(n,(e=>e.id)),E(n)}const _={conversationsUnseenCount:0,data:{},newsHubCount:0,open:null,objectAttachment:null,showConversationsDropdown:!1,showNewMessageView:!1,ui:{},unread:0};function O(e=_,t){if("CONVERSATION_OPEN"===t.type)return{...e,open:t.payload.id,objectAttachment:null,showNewMessageView:!1,ui:{...e.ui,[t.payload.id]:{contactRequestId:t.payload.contactRequestId||"",isPreview:t.payload.isPreview}}};if("CONVERSATION_CLOSE"===t.type)return{...e,open:null,objectAttachment:null,showNewMessageView:!1,ui:{...e.ui,[t.payload.id]:{contactRequestId:t.payload.contactRequestId||"",isPreview:!1,isDeclined:t.payload.isDeclined}}};if("CONVERSATION_CREATE"===t.type){const{id:s}=t.payload;return{...e,data:{...e.data,[s]:{...e[s]||{},...t.payload}}}}if("CONVERSATION_DELETE"===t.type){const s={...e,data:{...e.data}},{id:n}=t.payload;return delete s.data[n],s}if("FETCH_COMPLETE"===t.type){const{options:s,resource:n,response:r}=t.payload,a=r.resource_response.data;if("ConversationMessagesResource"===n){const t=a||[],n=(null==s?void 0:s.conversation_id)||"",r=d(e,n,t),o=r[r.length-1];return{...e,data:{...e.data,[n]:{...e.data[n],id:n,messages:r,unread:0,last_message:o}}}}if("ConversationsResource"===n){const t=a||[],s={...e,data:{...e.data}};return t.forEach((e=>{const{id:t,created_at:n,name:r,board:a,emails:o,unread:c,users:i,last_message:u}=e,E=d(s,t,[u]);s.data[t]={...s.data[t],id:t,created_at:n,name:r,board:a,emails:o||[],unread:c||0,users:i||[],last_message:u,messages:E}})),s}if("ConversationResource"===n){const t=a||{},{id:s}=t,n={...e,data:{...e.data}};return s&&(n.data[s]={...n.data[s],...t}),n}if("NewsHubBadgeResource"===n){if(a){const t=a.conversations_unseen_count||0;return{...e,unread:t}}return e}}else{if("MESSAGE_SEND_PENDING"===t.type){const{id:s,message:n}=t.payload;if(e.data[s]){const t=d(e,s,[n]);return{...e,data:{...e.data,[s]:{...e.data[s],id:s,messages:t,last_message:n}}}}return e}if("MESSAGE_SEND_PENDING_CLEAR"===t.type){const{id:s,messageId:n,newMessageId:r}=t.payload;if(e.data[s]){const t=i(e,s).find((e=>e.id===n));if(t){const a={...t,id:r};let o=i(e,s).filter((e=>e.id!==n)).concat([a]);return o=u(o,(e=>e.id)),o=E(o),{...e,data:{...e.data,[s]:{...e.data[s],id:s,messages:o}}}}}return e}if("OPEN_NEW_MESSAGE"===t.type){const{objectAttachment:s}=t.payload||null;return{...e,showNewMessageView:!0,open:null,objectAttachment:s}}if("CLOSE_DROPDOWN"===t.type)return{...e,showConversationsDropdown:!1,objectAttachment:null,showNewMessageView:!1};if("OPEN_DROPDOWN"===t.type)return{...e,showConversationsDropdown:!0};if("UPDATE_NEWSHUB_COUNT"===t.type)return{...e,newsHubCount:t.payload};if("UPDATE_UNREAD_COUNT"===t.type)return{...e,conversationsUnseenCount:t.payload}}return e}var l=s(425288),T=s(505920),R=s(785893);const A=(()=>{let e=0;return()=>e++})(),{Provider:S,useHook:C}=(0,l.Z)("Conversations");function N({children:e}){const[t,s]=(0,n.useReducer)(O,_),a=(0,n.useCallback)((e=>s({type:"FETCH_COMPLETE",payload:e})),[]);(0,T.Z8)("ConversationMessagesResource",a),(0,T.my)("ConversationMessagesResource",a),(0,T.Z8)("ConversationsResource",a),(0,T.Z8)("ConversationResource",a),(0,T.Z8)("NewsHubBadgeResource",a);const o=(0,n.useCallback)(((e,t=!1,n="")=>s({type:"CONVERSATION_OPEN",payload:{id:e,isPreview:t,contactRequestId:n}})),[]),c=(0,n.useCallback)(((e,t="",n=!1)=>s({type:"CONVERSATION_CLOSE",payload:{id:e,contactRequestId:t,isDeclined:n}})),[]),i=(0,n.useCallback)((e=>s({type:"CONVERSATION_CREATE",payload:e})),[]),u=(0,n.useCallback)((e=>s({type:"CONVERSATION_DELETE",payload:{id:e}})),[]),E=(0,n.useCallback)(((e,t,n)=>{r.ZP.create("ConversationsResource",{user_ids:e,emails:t,text:""}).callCreate().then((e=>{const t=e&&e.resource_response.data;s({type:"CONVERSATION_OPEN",payload:{id:t.id}})})).catch((e=>{const t=e.message_detail||e.message||"";n(t)}))}),[]),d=(0,n.useCallback)((()=>{s({type:"CLOSE_DROPDOWN"})}),[]),l=(0,n.useCallback)((()=>{s({type:"OPEN_DROPDOWN"})}),[]),A=(0,n.useCallback)((e=>{s({type:"OPEN_NEW_MESSAGE",payload:{objectAttachment:e}})}),[]),C=(0,n.useCallback)(((e,t)=>s({type:"MESSAGE_SEND_PENDING",payload:{id:e,message:t}})),[]),N=(0,n.useCallback)(((e,t,n)=>s({type:"MESSAGE_SEND_PENDING_CLEAR",payload:{id:e,messageId:t,newMessageId:n}})),[]),p=(0,n.useCallback)((e=>s({type:"UPDATE_NEWSHUB_COUNT",payload:e})),[]),P=(0,n.useCallback)((e=>s({type:"UPDATE_UNREAD_COUNT",payload:e})),[]),I=(0,n.useMemo)((()=>({conversationOpen:o,conversationClose:c,conversationCreate:i,conversationDelete:u,conversationGet:E,dropdownClose:d,dropdownOpen:l,newMessageOpen:A,pendingMessageSend:C,pendingMessageClear:N,updateNewsHubCount:p,updateUnreadCount:P,conversations:t})),[o,c,i,u,E,d,l,A,C,N,p,P,t]);return(0,R.jsx)(S,{value:I,children:e})}function p(){const{conversations:e,conversationCreate:t,pendingMessageSend:s,pendingMessageClear:n}=C(),o=(0,a.AF)();return(a,c,i,u)=>new Promise(((E,d)=>{const{text:_,pinId:O,boardId:l,userId:T,didItId:R}=c;function S(){const e=r.ZP.create("ConversationMessagesResource",{conversation_id:a,text:_,pin:O,board:l,user:T,user_did_it_data:R,source:i}),t=`${A()}`;s(a,{text:_,sender:u,created_at:(new Date).toString(),created_ms:Date.now(),id:t,board:null,event_type:null,pin:O?o[O]:null,type:"message",user_did_it_data:null,user:null}),e.callCreate().then((e=>{n(a,t,e.resource_response.data.id),E()})).catch(d)}e.data[a]?S():r.ZP.create("ConversationResource",{conversation_id:a}).callGet().then((e=>{const s=e&&e.resource_response&&e.resource_response.data;t(s),S()}))}))}function P(e){const{conversations:t}=C();return t.data[e]}function I(e){const{conversations:t}=C();return t.ui[e]||{contactRequestId:"",isDeclined:!1,isPreview:!1}}},480622:(e,t,s)=>{s.d(t,{C:()=>i,f:()=>c});var n=s(667294),r=s(425288),a=s(785893);const{Provider:o,useHook:c}=(0,r.Z)("MostRecentPin");function i({children:e}){const[t,s]=(0,n.useState)(),[r,c]=(0,n.useState)(),i=(0,n.useCallback)((e=>{const t=r?r.slice(0,10):[],s=[e].concat(t.filter((t=>t!==e)));c(s)}),[r]),u=(0,n.useMemo)((()=>({id:t,plpImageSignatures:r,setMostRecentPinId:s,setMostRecentPinImage:i})),[t,r,i]);return(0,a.jsx)(o,{value:u,children:e})}},330899:(e,t,s)=>{s.d(t,{x:()=>c,y:()=>i});var n=s(667294),r=s(425288),a=s(785893);const{Provider:o,useMaybeHook:c}=(0,r.Z)("ProfileViewContext");function i({children:e}){const[t,s]=(0,n.useState)(),[r,c]=(0,n.useState)(new Map),[i,u]=(0,n.useState)(),[E,d]=(0,n.useState)(),_=(0,n.useCallback)(((e,t)=>{c(new Map(r.set(e,t)))}),[r]),O=(0,n.useMemo)((()=>({boardPinDensity:t,boardSortOrder:r,profileBoardView:i,profilePinDensity:E,setBoardPinDensity:s,updateBoardSortOrder:_,setProfileBoardView:u,setProfilePinDensity:d})),[t,r,i,E,_]);return(0,a.jsx)(o,{value:O,children:e})}},904411:(e,t,s)=>{s.d(t,{bn:()=>c,fJ:()=>u,gC:()=>i});var n=s(966338),r=s(425288),a=s(785893);const{Provider:o,useHook:c}=(0,r.Z)("Boards");function i(){const e=c();return t=>e[t]}function u({children:e}){const t=(0,n.useSelector)((({boards:e})=>e),n.shallowEqual);return(0,a.jsx)(o,{value:t,children:e})}},711108:(e,t,s)=>{s.d(t,{l:()=>E,E:()=>u});var n=s(667294),r=s(425288);function a(e={},t){if("SUGGESTIONS_FETCH_COMPLETE"===t.type){const{payload:r}=t;if("ShareSuggestionsResource"===r.resource){var s;const n=t.payload.response.resource_response.data||[],{term:a=""}=null!==(s=r.options)&&void 0!==s?s:{};return{...e,[a]:n}}if("ShareSuggestionsTypeaheadResource"===r.resource){var n;const s=(t.payload.response.resource_response.data||{}).items||[],{term:a=""}=null!==(n=r.options)&&void 0!==n?n:{};return{...e,[a]:s}}}return e}var o=s(505920),c=s(785893);const{Provider:i,useHook:u}=(0,r.Z)("ShareSuggestions");function E({children:e}){const[t,s]=(0,n.useReducer)(a,{}),r=e=>{s({type:"SUGGESTIONS_FETCH_COMPLETE",payload:e})};(0,o.Z8)("ShareSuggestionsResource",r),(0,o.Z8)("ShareSuggestionsTypeaheadResource",r);const u=(0,n.useMemo)((()=>({shareSuggestions:t})),[t]);return(0,c.jsx)(i,{value:u,children:e})}}}]);
//# sourceMappingURL=https://sm.pinimg.com/webapp/41160-dcfa965579b6a0f5.mjs.map