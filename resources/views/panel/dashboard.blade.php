@extends('layouts.panel.main')
@section('content')
<style type="text/css">
:root{
  --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
  --msger-bg: #fff;
  --border: 2px solid #ddd;
  --left-msg-bg: #ececec;
  --right-msg-bg: #579ffb;
}
body{
    font-size:14px;
}
.subscripe:hover
{
background-color: red;
}
a {
    text-decoration: none;
    color: inherit;
}


#profile-image1{
    border-radius:50%;
}
/*.modal {*/
/*  display: none;*/
/*  position: fixed;*/
/*  z-index: 1;*/
/*  left: 0;*/
/*  top: 0;*/
/*  width: 100%;*/
/*  height: 100%;*/
/*  overflow: auto;*/
/*  background-color: rgba(0, 0, 0, 0.5);*/
/*}*/

/*.modal-content {*/
/*  background-color: #fefefe;*/
/*  margin: 15% auto;*/
/*  padding: 20px;*/
/*  border: 1px solid #888;*/
/*  width: 80%;*/
/*}*/

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.msger {
  display: flex;
  flex-direction:column;
  /*flex-flow: column wrap;*/
  justify-content: space-between;
  width: 98%;
  /*max-width: 867px;*/
  margin: 0px 10px;
  /*height: calc(100% - 50px);*/
  height:500px;
  border: var(--border);
  border-radius: 5px;
  background: var(--msger-bg);
  box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
}

@media(max-width:768px){
    .msger{
         width: 94%;
    }
}

.msger-header {
  display: flex;
  justify-content: space-between;
  padding: 10px;
  border-bottom: var(--border);
  background: #eee;
  color: #666;
}

.msger-chat {
  flex: 1;
  overflow-y: auto;
  padding: 10px;
  max-height: 400px;
  height:100%;
}
.msger-chat-container{
    height: 100%;
}

.msger-chat::-webkit-scrollbar {
  width: 6px;
}
.msger-chat::-webkit-scrollbar-track {
  background: #ddd;
}
.msger-chat::-webkit-scrollbar-thumb {
  background: #bdbdbd;
}
.msg {
  display: flex;
  align-items: flex-end;
  margin-bottom: 10px;
}
.msg:last-of-type {
  margin: 0;
}

.msg-img {
    
  width: 50px;
  height: 50px;
  margin-right: 10px;
  background: #ddd;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  border-radius: 50%;
  
}
.msg-bubble {
  max-width: 450px;
  padding: 15px;
  border-radius: 15px;
  background: var(--left-msg-bg);
}
.msg-info {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}
.msg-info-name {
  margin-right: 10px;
  font-weight: bold;
}
.msg-info-time {
  font-size: 0.85em;
}

.left-msg .msg-bubble {
  border-bottom-left-radius: 0;
}

.right-msg {
  flex-direction: row-reverse;
}
.right-msg .msg-bubble {
  background: var(--right-msg-bg);
  color: #fff;
  border-bottom-right-radius: 0;
}
.right-msg .msg-img {
  margin: 0 0 0 10px;
}

.msger-inputarea {
  display: flex;
  padding: 10px;
  border-top: var(--border);
  background: #eee;
}
.msger-inputarea * {
  padding: 10px;
  border: none;
  border-radius: 3px;
  font-size: 1em;
}
.msger-input {
  flex: 1;
  background: #ddd;
}
.msger-send-btn {
  margin-left: 10px;
  background: rgb(0, 196, 65);
  color: #fff;
  font-weight: bold;
  cursor: pointer;
  transition: background 0.23s;
}
.msger-send-btn:hover {
  background: rgb(0, 180, 50);
}

.msger-chat {
  background-color: #fcfcfe;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='260' height='260' viewBox='0 0 260 260'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23dddddd' fill-opacity='0.4'%3E%3Cpath d='M24.37 16c.2.65.39 1.32.54 2H21.17l1.17 2.34.45.9-.24.11V28a5 5 0 0 1-2.23 8.94l-.02.06a8 8 0 0 1-7.75 6h-20a8 8 0 0 1-7.74-6l-.02-.06A5 5 0 0 1-17.45 28v-6.76l-.79-1.58-.44-.9.9-.44.63-.32H-20a23.01 23.01 0 0 1 44.37-2zm-36.82 2a1 1 0 0 0-.44.1l-3.1 1.56.89 1.79 1.31-.66a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .86.02l2.88-1.27a3 3 0 0 1 2.43 0l2.88 1.27a1 1 0 0 0 .85-.02l3.1-1.55-.89-1.79-1.42.71a3 3 0 0 1-2.56.06l-2.77-1.23a1 1 0 0 0-.4-.09h-.01a1 1 0 0 0-.4.09l-2.78 1.23a3 3 0 0 1-2.56-.06l-2.3-1.15a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1L.9 19.22a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01zm0-2h-4.9a21.01 21.01 0 0 1 39.61 0h-2.09l-.06-.13-.26.13h-32.31zm30.35 7.68l1.36-.68h1.3v2h-36v-1.15l.34-.17 1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0L2.26 23h2.59l1.36.68a3 3 0 0 0 2.56.06l1.67-.74h3.23l1.67.74a3 3 0 0 0 2.56-.06zM-13.82 27l16.37 4.91L18.93 27h-32.75zm-.63 2h.34l16.66 5 16.67-5h.33a3 3 0 1 1 0 6h-34a3 3 0 1 1 0-6zm1.35 8a6 6 0 0 0 5.65 4h20a6 6 0 0 0 5.66-4H-13.1z'/%3E%3Cpath id='path6_fill-copy' d='M284.37 16c.2.65.39 1.32.54 2H281.17l1.17 2.34.45.9-.24.11V28a5 5 0 0 1-2.23 8.94l-.02.06a8 8 0 0 1-7.75 6h-20a8 8 0 0 1-7.74-6l-.02-.06a5 5 0 0 1-2.24-8.94v-6.76l-.79-1.58-.44-.9.9-.44.63-.32H240a23.01 23.01 0 0 1 44.37-2zm-36.82 2a1 1 0 0 0-.44.1l-3.1 1.56.89 1.79 1.31-.66a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .9 0l2.21-1.1a3 3 0 0 1 2.69 0l2.2 1.1a1 1 0 0 0 .86.02l2.88-1.27a3 3 0 0 1 2.43 0l2.88 1.27a1 1 0 0 0 .85-.02l3.1-1.55-.89-1.79-1.42.71a3 3 0 0 1-2.56.06l-2.77-1.23a1 1 0 0 0-.4-.09h-.01a1 1 0 0 0-.4.09l-2.78 1.23a3 3 0 0 1-2.56-.06l-2.3-1.15a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01a1 1 0 0 0-.44.1l-2.21 1.11a3 3 0 0 1-2.69 0l-2.2-1.1a1 1 0 0 0-.45-.11h-.01zm0-2h-4.9a21.01 21.01 0 0 1 39.61 0h-2.09l-.06-.13-.26.13h-32.31zm30.35 7.68l1.36-.68h1.3v2h-36v-1.15l.34-.17 1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.69 0l1.36-.68h2.59l1.36.68a3 3 0 0 0 2.56.06l1.67-.74h3.23l1.67.74a3 3 0 0 0 2.56-.06zM246.18 27l16.37 4.91L278.93 27h-32.75zm-.63 2h.34l16.66 5 16.67-5h.33a3 3 0 1 1 0 6h-34a3 3 0 1 1 0-6zm1.35 8a6 6 0 0 0 5.65 4h20a6 6 0 0 0 5.66-4H246.9z'/%3E%3Cpath d='M159.5 21.02A9 9 0 0 0 151 15h-42a9 9 0 0 0-8.5 6.02 6 6 0 0 0 .02 11.96A8.99 8.99 0 0 0 109 45h42a9 9 0 0 0 8.48-12.02 6 6 0 0 0 .02-11.96zM151 17h-42a7 7 0 0 0-6.33 4h54.66a7 7 0 0 0-6.33-4zm-9.34 26a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-4.34a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-4.34a8.98 8.98 0 0 0 3.34-7h-2a7 7 0 0 1-7 7h-7a7 7 0 1 1 0-14h42a7 7 0 1 1 0 14h-9.34zM109 27a9 9 0 0 0-7.48 4H101a4 4 0 1 1 0-8h58a4 4 0 0 1 0 8h-.52a9 9 0 0 0-7.48-4h-42z'/%3E%3Cpath d='M39 115a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm6-8a6 6 0 1 1-12 0 6 6 0 0 1 12 0zm-3-29v-2h8v-6H40a4 4 0 0 0-4 4v10H22l-1.33 4-.67 2h2.19L26 130h26l3.81-40H58l-.67-2L56 84H42v-6zm-4-4v10h2V74h8v-2h-8a2 2 0 0 0-2 2zm2 12h14.56l.67 2H22.77l.67-2H40zm13.8 4H24.2l3.62 38h22.36l3.62-38z'/%3E%3Cpath d='M129 92h-6v4h-6v4h-6v14h-3l.24 2 3.76 32h36l3.76-32 .24-2h-3v-14h-6v-4h-6v-4h-8zm18 22v-12h-4v4h3v8h1zm-3 0v-6h-4v6h4zm-6 6v-16h-4v19.17c1.6-.7 2.97-1.8 4-3.17zm-6 3.8V100h-4v23.8a10.04 10.04 0 0 0 4 0zm-6-.63V104h-4v16a10.04 10.04 0 0 0 4 3.17zm-6-9.17v-6h-4v6h4zm-6 0v-8h3v-4h-4v12h1zm27-12v-4h-4v4h3v4h1v-4zm-6 0v-8h-4v4h3v4h1zm-6-4v-4h-4v8h1v-4h3zm-6 4v-4h-4v8h1v-4h3zm7 24a12 12 0 0 0 11.83-10h7.92l-3.53 30h-32.44l-3.53-30h7.92A12 12 0 0 0 130 126z'/%3E%3Cpath d='M212 86v2h-4v-2h4zm4 0h-2v2h2v-2zm-20 0v.1a5 5 0 0 0-.56 9.65l.06.25 1.12 4.48a2 2 0 0 0 1.94 1.52h.01l7.02 24.55a2 2 0 0 0 1.92 1.45h4.98a2 2 0 0 0 1.92-1.45l7.02-24.55a2 2 0 0 0 1.95-1.52L224.5 96l.06-.25a5 5 0 0 0-.56-9.65V86a14 14 0 0 0-28 0zm4 0h6v2h-9a3 3 0 1 0 0 6H223a3 3 0 1 0 0-6H220v-2h2a12 12 0 1 0-24 0h2zm-1.44 14l-1-4h24.88l-1 4h-22.88zm8.95 26l-6.86-24h18.7l-6.86 24h-4.98zM150 242a22 22 0 1 0 0-44 22 22 0 0 0 0 44zm24-22a24 24 0 1 1-48 0 24 24 0 0 1 48 0zm-28.38 17.73l2.04-.87a6 6 0 0 1 4.68 0l2.04.87a2 2 0 0 0 2.5-.82l1.14-1.9a6 6 0 0 1 3.79-2.75l2.15-.5a2 2 0 0 0 1.54-2.12l-.19-2.2a6 6 0 0 1 1.45-4.46l1.45-1.67a2 2 0 0 0 0-2.62l-1.45-1.67a6 6 0 0 1-1.45-4.46l.2-2.2a2 2 0 0 0-1.55-2.13l-2.15-.5a6 6 0 0 1-3.8-2.75l-1.13-1.9a2 2 0 0 0-2.5-.8l-2.04.86a6 6 0 0 1-4.68 0l-2.04-.87a2 2 0 0 0-2.5.82l-1.14 1.9a6 6 0 0 1-3.79 2.75l-2.15.5a2 2 0 0 0-1.54 2.12l.19 2.2a6 6 0 0 1-1.45 4.46l-1.45 1.67a2 2 0 0 0 0 2.62l1.45 1.67a6 6 0 0 1 1.45 4.46l-.2 2.2a2 2 0 0 0 1.55 2.13l2.15.5a6 6 0 0 1 3.8 2.75l1.13 1.9a2 2 0 0 0 2.5.8zm2.82.97a4 4 0 0 1 3.12 0l2.04.87a4 4 0 0 0 4.99-1.62l1.14-1.9a4 4 0 0 1 2.53-1.84l2.15-.5a4 4 0 0 0 3.09-4.24l-.2-2.2a4 4 0 0 1 .97-2.98l1.45-1.67a4 4 0 0 0 0-5.24l-1.45-1.67a4 4 0 0 1-.97-2.97l.2-2.2a4 4 0 0 0-3.09-4.25l-2.15-.5a4 4 0 0 1-2.53-1.84l-1.14-1.9a4 4 0 0 0-5-1.62l-2.03.87a4 4 0 0 1-3.12 0l-2.04-.87a4 4 0 0 0-4.99 1.62l-1.14 1.9a4 4 0 0 1-2.53 1.84l-2.15.5a4 4 0 0 0-3.09 4.24l.2 2.2a4 4 0 0 1-.97 2.98l-1.45 1.67a4 4 0 0 0 0 5.24l1.45 1.67a4 4 0 0 1 .97 2.97l-.2 2.2a4 4 0 0 0 3.09 4.25l2.15.5a4 4 0 0 1 2.53 1.84l1.14 1.9a4 4 0 0 0 5 1.62l2.03-.87zM152 207a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm6 2a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-11 1a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-6 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3-5a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-8 8a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm3 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm0 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4 7a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm5-2a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm5 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4-6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm6-4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-4-3a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm4-3a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-5-4a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm-24 6a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm16 5a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm7-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0zm86-29a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm19 9a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-14 5a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-25 1a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm5 4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm9 0a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm15 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm12-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-11-14a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-19 0a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm6 5a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-25 15c0-.47.01-.94.03-1.4a5 5 0 0 1-1.7-8 3.99 3.99 0 0 1 1.88-5.18 5 5 0 0 1 3.4-6.22 3 3 0 0 1 1.46-1.05 5 5 0 0 1 7.76-3.27A30.86 30.86 0 0 1 246 184c6.79 0 13.06 2.18 18.17 5.88a5 5 0 0 1 7.76 3.27 3 3 0 0 1 1.47 1.05 5 5 0 0 1 3.4 6.22 4 4 0 0 1 1.87 5.18 4.98 4.98 0 0 1-1.7 8c.02.46.03.93.03 1.4v1h-62v-1zm.83-7.17a30.9 30.9 0 0 0-.62 3.57 3 3 0 0 1-.61-4.2c.37.28.78.49 1.23.63zm1.49-4.61c-.36.87-.68 1.76-.96 2.68a2 2 0 0 1-.21-3.71c.33.4.73.75 1.17 1.03zm2.32-4.54c-.54.86-1.03 1.76-1.49 2.68a3 3 0 0 1-.07-4.67 3 3 0 0 0 1.56 1.99zm1.14-1.7c.35-.5.72-.98 1.1-1.46a1 1 0 1 0-1.1 1.45zm5.34-5.77c-1.03.86-2 1.79-2.9 2.77a3 3 0 0 0-1.11-.77 3 3 0 0 1 4-2zm42.66 2.77c-.9-.98-1.87-1.9-2.9-2.77a3 3 0 0 1 4.01 2 3 3 0 0 0-1.1.77zm1.34 1.54c.38.48.75.96 1.1 1.45a1 1 0 1 0-1.1-1.45zm3.73 5.84c-.46-.92-.95-1.82-1.5-2.68a3 3 0 0 0 1.57-1.99 3 3 0 0 1-.07 4.67zm1.8 4.53c-.29-.9-.6-1.8-.97-2.67.44-.28.84-.63 1.17-1.03a2 2 0 0 1-.2 3.7zm1.14 5.51c-.14-1.21-.35-2.4-.62-3.57.45-.14.86-.35 1.23-.63a2.99 2.99 0 0 1-.6 4.2zM275 214a29 29 0 0 0-57.97 0h57.96zM72.33 198.12c-.21-.32-.34-.7-.34-1.12v-12h-2v12a4.01 4.01 0 0 0 7.09 2.54c.57-.69.91-1.57.91-2.54v-12h-2v12a1.99 1.99 0 0 1-2 2 2 2 0 0 1-1.66-.88zM75 176c.38 0 .74-.04 1.1-.12a4 4 0 0 0 6.19 2.4A13.94 13.94 0 0 1 84 185v24a6 6 0 0 1-6 6h-3v9a5 5 0 1 1-10 0v-9h-3a6 6 0 0 1-6-6v-24a14 14 0 0 1 14-14 5 5 0 0 0 5 5zm-17 15v12a1.99 1.99 0 0 0 1.22 1.84 2 2 0 0 0 2.44-.72c.21-.32.34-.7.34-1.12v-12h2v12a3.98 3.98 0 0 1-5.35 3.77 3.98 3.98 0 0 1-.65-.3V209a4 4 0 0 0 4 4h16a4 4 0 0 0 4-4v-24c.01-1.53-.23-2.88-.72-4.17-.43.1-.87.16-1.28.17a6 6 0 0 1-5.2-3 7 7 0 0 1-6.47-4.88A12 12 0 0 0 58 185v6zm9 24v9a3 3 0 1 0 6 0v-9h-6z'/%3E%3Cpath d='M-17 191a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm19 9a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2H3a1 1 0 0 1-1-1zm-14 5a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm-25 1a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm5 4a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm9 0a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm15 1a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm12-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2H4zm-11-14a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-19 0a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2h-2zm6 5a1 1 0 0 1 1-1h2a1 1 0 0 1 0 2h-2a1 1 0 0 1-1-1zm-25 15c0-.47.01-.94.03-1.4a5 5 0 0 1-1.7-8 3.99 3.99 0 0 1 1.88-5.18 5 5 0 0 1 3.4-6.22 3 3 0 0 1 1.46-1.05 5 5 0 0 1 7.76-3.27A30.86 30.86 0 0 1-14 184c6.79 0 13.06 2.18 18.17 5.88a5 5 0 0 1 7.76 3.27 3 3 0 0 1 1.47 1.05 5 5 0 0 1 3.4 6.22 4 4 0 0 1 1.87 5.18 4.98 4.98 0 0 1-1.7 8c.02.46.03.93.03 1.4v1h-62v-1zm.83-7.17a30.9 30.9 0 0 0-.62 3.57 3 3 0 0 1-.61-4.2c.37.28.78.49 1.23.63zm1.49-4.61c-.36.87-.68 1.76-.96 2.68a2 2 0 0 1-.21-3.71c.33.4.73.75 1.17 1.03zm2.32-4.54c-.54.86-1.03 1.76-1.49 2.68a3 3 0 0 1-.07-4.67 3 3 0 0 0 1.56 1.99zm1.14-1.7c.35-.5.72-.98 1.1-1.46a1 1 0 1 0-1.1 1.45zm5.34-5.77c-1.03.86-2 1.79-2.9 2.77a3 3 0 0 0-1.11-.77 3 3 0 0 1 4-2zm42.66 2.77c-.9-.98-1.87-1.9-2.9-2.77a3 3 0 0 1 4.01 2 3 3 0 0 0-1.1.77zm1.34 1.54c.38.48.75.96 1.1 1.45a1 1 0 1 0-1.1-1.45zm3.73 5.84c-.46-.92-.95-1.82-1.5-2.68a3 3 0 0 0 1.57-1.99 3 3 0 0 1-.07 4.67zm1.8 4.53c-.29-.9-.6-1.8-.97-2.67.44-.28.84-.63 1.17-1.03a2 2 0 0 1-.2 3.7zm1.14 5.51c-.14-1.21-.35-2.4-.62-3.57.45-.14.86-.35 1.23-.63a2.99 2.99 0 0 1-.6 4.2zM15 214a29 29 0 0 0-57.97 0h57.96z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

/* Apply some basic styles to the list */
.custom-list {
    list-style-type: none; /* Remove default list bullet points */
    padding: 7px; /* Remove default padding */
    margin: 0; /* Remove default margin */
}

/* Style the list items */
.custom-list li {
    background-color: #f0f0f0; /* Background color for list items */
    padding: 10px; /* Add padding to the list items */
    margin-bottom: 5px; /* Add margin between list items */
    border: 1px solid #ddd; /* Add a border to each list item */
    border-radius: 5px; /* Add rounded corners to the list items */
    font-family: Arial, sans-serif; /* Specify the font family */
    font-size: 16px; /* Specify the font size */
    cursor:pointer;
}

/* Style list items on hover */
.custom-list li:hover {
    background-color: #e0e0e0; /* Change background color on hover */
}

/* style for the user name container */
@media(max-width:765px){
  .welcome{
        text-align: center;
  }
  .profile-details{
    margin: 5px 10px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  .profile-row{
    margin: 4px 0px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }
  .profile-row-item{
    border-radius: 9px;
  }
  .overview{
    border-radius: 10px;
  }
}
@media(min-width:1700px){
 
}

</style>
<style>
    <style>
/* Style for the chatbox container */
.chatbox {
    width: 300px; /* Adjust width as needed */
    margin: 20px;
}

/* Style for the message bubbles */
.message {
    max-width: 80%; /* Adjust maximum width of messages */
    margin: 10px;
    padding: 10px;
    border-radius: 20px; /* Rounded corners for bubble effect */
    clear: both;
}

/* Style for incoming messages */
.incoming {
    background-color: #e0e0e0; /* Light gray background for incoming messages */
    float: left;
}

/* Style for outgoing messages */
.outgoing {
    background-color: #007bff; /* Blue background for outgoing messages */
    color: white; /* White text color for outgoing messages */
    float: right;
}
li {
    list-style-type: none;
}

.chat-container{
    width:100%;
    height:300px;
    max-height:500px;
}
</style>
</style>
<section class="postWrapper clearfix myaccount ">
    <div class="">
        <div class="row">
            <?php
            $user_id=auth::user()->id;
            
            ?>
            <input type="hidden" id="text_to_user_id" value="{{$user_id}}">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 brtop-30 brbottom-30">
    <div class="clearfix lhs-post-links border-radius-3 lhs-myaccount">
        <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-20">
            <h3 class="font-nunito text-center semi-bold text-uppercase" style="background-color:rgb(221, 221, 221);color:#dc3545;padding:20px;font-weight:900"><b>My Account Overview</b></h3>
            <p class="font-roboto regular"></p>
        </div>
        
        <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12 menu_new">
                        <div class="row">
                <ul class="font-roboto light tab">

                  <li class="tablinks" onclick="openCity(event, 'event1')">
                    <a href="{{url('/home')}}" class="" >
                      <span class="account-ico dashboard"></span>
                      Dashboard                            
                    </a>
                  </li>

                  <li class="tablinks" >
                    <a  href="{{url('myprofile')}}"class="change-active    text-decoration-none" >
                      <span class="account-ico dashboard"></span>
                      Profile
                    </a>
                  </li>

                  @if(Auth::user()->role === "agent")
                  <li class="tablinks" >
                    <a  href="{{url('myslots')}}"class="change-active    text-decoration-none" >
                      <span class="account-ico dashboard"></span>
                      Slot
                    </a>
                  </li>
                  @endif

                  <li class="tablinks">
                    <a href="{{url('display_property')}}"class="change-active  text-decoration-none" >
                      <span class="account-ico requirements"></span>
                      Properties 
                    </a>
                  </li>

                  <li>
                    <a href="{{url('Automobiles')}}"class="change-active  text-decoration-none" >
                      <span class="account-ico requirements"></span>
                      Automobiles 
                    </a>
                  </li>

                  <li class="tablinks" >
                    <a href="{{url('display_ads')}}"class="change-active  text-decoration-none" >
                      <span class="account-ico requirements"></span>
                      Advertisements 
                    </a>
                  </li>  

                  <li class="tablinks" onclick="openCity(event, 'event4')">
                    <a class="change-active  text-decoration-none" >
                      <span class="account-ico requirements"></span>
                      Chat 
                    </a>
                  </li>                   

                  <!-- <li class="tablinks" >
                    <a  href="{{url('Enquiries')}}"class="change-active    text-decoration-none" >
                      <span class="account-ico dashboard"></span>
                      Enquiries&nbsp; 
                      @if($enquiries_view==1)
                      <i class="fa fa-circle " aria-hidden="true" style="color:#6DCB20"></i>
                    </a>
                    @endif
                  </li> -->

                  <li class="tablinks" >
                    <a href="{{url('Enquiries')}}"class="change-active    text-decoration-none" >
                      <span class="account-ico dashboard"></span>
                      Enquiries
                    </a>
                  </li>

                  <li class="tablinks" onclick="openCity(event, 'event5')">
                    <a href="{{url('payments_history')}}"class="change-active  text-decoration-none" >
                      <span class="account-ico subscriptions"></span>
                      Payment History
                    </a>
                  </li>
                  
                </ul>
            </div>
        </div>
    </div>
</div>            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 rhs-myaccount brtop-30 brbottom-30">

 <div class="row tabcontent mt-4" id="event1 ">
                            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 welcome"> 
                                <h2 class="font-nunito semi-bold"> Welcome {{Auth::user()->name}}</h2>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12 mb-2 ">
                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20">
                                <div class="profile-details clearfix border-radius-3">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h3 class="font-roboto regular">Profile Created on : <span>{{ Auth::user()->created_at->format('F j, Y') }}</span><span class="edit hover-click"><a href="https://www.helloaddress.com/nc/edit/profile"></a></span></h3>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center brtop-20 brbottom-20">
                                        <div class="profile-img clearfix">
                                        @if(Auth::user()=="")
                                          <img alt="User Pic"  src="{{asset('uploads/Agent/demo.png')}}"id="profile-image1" height="200px" width="230px">
                                      @else
                                         <img alt="User Pic"  src="{{asset('uploads/Agent/'.Auth::user()->image)}}"id="profile-image1" height="200">
                                        @endif
 </div>
                                        <h1 class="font-nunito semi-bold">{{Auth::user()->name}}</h1>
                                        <h2 class="font-roboto regular">{{Auth::user()->address}}</h2>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile-contact">
                                        <ul class="font-roboto regular">
                                            <li><span class="email"></span>{{Auth::user()->email}}</li>
                                            <li><span class="call"></span>{{Auth::user()->phone}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 ">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 brbottom-20">
                                      <a href="/display_property"> <div class="profile-count border-radius-3 clearfix property">
                                           <!-- removed the span on the side right side of the value to make it center <span></span> -->
                                            <h5 class="font-nunito semi-bold text-center">{{$prop['propertycount_all_count']}}</h5>
                                            <p class="font-roboto regular text-center">My Properties</p>
                                        </div></a> 
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 brbottom-20">
                                      <a href="/Automobiles"> 
                                      <div class="profile-count border-radius-3 clearfix contact">
                                           <!-- removed the span on the side right side of the value to make it center <span></span> -->
                                            <h5 class="font-nunito semi-bold text-center">{{$prop['autocount_all_count']}}</h5>
                                            <p class="font-roboto regular text-center">My Automobiles</p>
                                          
                                        </div>
                                          </a>  
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 brbottom-20">
                                      <a href="/display_ads"> 
                                      <div class="profile-count border-radius-3 clearfix saved">
                                            <!-- removed the span on the side right side of the value to make it center <span></span> -->
                                            <h5 class="font-nunito semi-bold text-center">{{$prop['advertisemnt_all_count']}}</h5>
                                            <p class="font-roboto regular text-center">My Advertisements</p>
                                        </div>
                                        </a> 
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6 brbottom-20">
                                        <div class="profile-count border-radius-3 clearfix response">
                                             <!-- removed the span on the side right side of the value to make it center <span></span> -->
                                            <h5 class="font-nunito semi-bold text-center">{{$prop['enquiry_all_count']}}</h5>
                                            <p class="font-roboto regular text-center">My Enquiries</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                      
                <!--<div class="row">-->
                <!--             <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12 mb-2">-->
                <!--            <a href="{{url('basic')}}" class="btn btn-warning font-roboto regular add-prop">-->
                <!--                    <span></span><span class="" style="font-size:14px;"><b>+Add New Propertiess</b></span>-->
                <!--                </a>-->
                <!--            </div>&nbsp;&nbsp;-->
                <!--            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12 mb-2">-->
                <!--            <a href="{{url('Auto_Location')}}" class="btn btn-warning font-roboto regular add-prop">-->
                <!--                    <span></span><span class="" style="font-size:14px;"><b>+Add New Automobiles </b></span>-->
                <!--                </a>-->
                <!--            </div>&nbsp;&nbsp;-->
                <!--            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12 mb-2">-->
                <!--            <a href="{{url('add_ad')}}" class="btn btn-warning font-roboto regular add-prop">-->
                <!--                    <span></span><span class="" style="font-size:14px;"><b>+Add New Advertisements</b></span>-->
                <!--                </a>-->
                <!--            </div>-->
                <!--            <div class="col-lg-1 col-md-4 col-sm-3 col-xs-12 mb-2">-->
                <!--            <a href="{{url('Enquiries')}}" class="btn btn-warning font-roboto regular add-prop">-->
                <!--                    <span></span><span class="" style="font-size:14px;"><b>Enquiries</b></span>-->
                <!--                </a>-->
                <!--            </div>-->
                            <!--k1-->
                <!--            <div class="col-lg-1 col-md-4 col-sm-3 col-xs-12 mb-2">-->
                <!--           <li class="tablinks" onclick="openCity(event, 'event4')">-->
                <!--            <a class="btn btn-warning font-roboto regular add-prop" >-->
                <!--                <span class="account-ico requirements "></span>-->
                <!--                &nbsp;&nbsp;<b  style="font-size:14px;">Chat</b>&nbsp;&nbsp;  </a>-->
                <!--        </li>-->
                <!--            </div>-->
                <!--            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12 mb-2">-->
                            
                <!--            </div>-->
                <!--            <div class="col-lg-2 col-md-4 col-sm-3 col-xs-12 mb-2">-->
                           
                <!--            </div>-->
                <!--    </div>-->
                <div class="row justify-content-between">
                    <div class="col-lg-2 col-md-4 d-none d-lg-block mb-2">
                        <a href="{{url('scheam')}}" class="btn btn-warning font-roboto regular add-prop w-100">
                         <b style="font-size:14px;">+ New Properties</b>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 d-none d-lg-block mb-2">
                         <a href="{{url('scheam_auto')}}" class="btn btn-warning font-roboto regular add-prop w-100">
                            <b style="font-size:14px;">+ New Automobiles</b>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 d-none d-lg-block mb-2">
                        <a href="{{url('add_ad')}}" class="btn btn-warning font-roboto regular add-prop w-100">
                        <b style="font-size:14px;">+ New Advertisements</b>
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 d-none d-lg-block mb-2">
                        <a href="{{url('Enquiries')}}" class="btn btn-warning font-roboto regular add-prop w-100">
                        <b style="font-size:14px;">Enquiries</b>
                        </a>
                    </div>

                     <div class="col-lg-1 col-md-4 d-none d-lg-block mb-2">
                        <li class="tablinks" onclick="openCity(event, 'event4')">
                            <a class="btn btn-warning font-roboto regular add-prop w-100">
                             <b style="font-size:14px;">Chat</b>
                            </a>
                        </li>
                    </div>
                </div>

                    
                        </div> 

<div class="row tabcontent nexttab " id="event4">
<!-- chat -->
<section class="msger">
  <header class="msger-header">
    <div class="msger-header-title">
      <i class="fas fa-comment-alt"></i>
    </div>
    <div class="msger-header-options">
      <span><i class="fas fa-cog"></i></span>
    </div>
  </header>
<div class="row">

    <div class="chat-container">
   <main class="chatbox msger-chat-container" >
       <ul class="chatbox msger-chat">
       @foreach($chats as $a)
       @if($a->flag==1)
        <li class="message outgoing"> {{$a->message}}<br><small>{{date('d-M-Y', strtotime($a->created_at))}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{date('h:i a', strtotime($a->created_at))}}</small></li> 
        @else
        <li  class="message incoming"> {{$a->message}}<br> <small>{{date('d-M-Y', strtotime($a->created_at))}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{date('h:i a', strtotime($a->created_at))}}</small></li>
        @endif
        @endforeach
      </ul>

                                   

<?php

?>
   </main>   
</div>


  <form class="msger-inputarea">
         <input type="text" class="msger-input" placeholder="Enter your message...">
         <button type="button" class="msger-send-btn">Send</button>
  </form>
</section>
<!-- chat -->
</div>

                                                        <div class="row tabcontent nexttab mt-4" id="event3">
                            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12"> 
                                <h2 class="font-nunito semi-bold">Automobiles
                                    <!-- <span>Last Login : September 22, 2023, 4:49 pm</span> -->
                                                                    </h2>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12 mb-2">
                            <a href="{{url('panel/add-automobiles')}}" class="btn btn-warning font-roboto regular add-prop">
                                    <span></span><span class="" style="font-size:14px;">+Add New</span>
                                </a>
                            </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                        
<div class="row">
            @foreach($myautomobiles as $automobile)
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 brtop-30">
                <div class="myaccount-listing clearfix border-radius-3 inactive">
                   <span class="badge status font-roboto regular border-radius-3"></span>
                                    @if(isset($automobile->image))
                    <div class="col-lg-5 col-md-12 col-sm-5 col-xs-5 img-wrap hover-click"                                          style="background: url('{{asset('uploads/automobiles/'.$automobile->image)}}') no-repeat center; background-size: cover">
                    @else
                     <div class="col-lg-5 col-md-12 col-sm-5 col-xs-5 img-wrap hover-click"  style="background: url('https://assets.helloaddress.com/ui/build/images/property-no-image-small-rh.jpg') no-repeat center; background-size: cover">
                    @endif

                                         <a href="{{url('panel/edit-automobiles/'.$automobile->id)}}"></a>
                   </div>
                   <div class="col-lg-7 col-md-12 col-sm-7 col-xs-7">
                       <h2 class="font-roboto regular"><a href="https://www.helloaddress.com/nc/user/property/942062/basic-info">{{$automobile->name}}</a></h2>
                       <p class="font-roboto regular locationP"><span>Location </span>{{$automobile->street}},{{$automobile->area}},{{$automobile->province}} </p>
                       <p class="font-roboto regular">Automobile ID : P942062</p>
                       <p class="font-roboto regular">VIEWS : {{$automobile->count}}</p>
                   </div>
               </div>
               <div class="myaccount-listing-link clearfix">
                   <ul class="font-roboto regular">
                       <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <a href="https://www.helloaddress.com/nc/property/package/942062">
                            </a><a href="#"><span class="subscribe-ico"></span>Subscribe</a>
                          
                       </li>
                       <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <div class="dropdown">
                               <a href="#" class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="more-ico"></span> More Actions
                          </a>
                          <ul class="dropdown-menu font-roboto regular" aria-labelledby="dropdownMenu1">
                              <li><a class="myAccount-edit" title="Edit" href="{{url('panel/edit-automobiles/'.$automobile->id)}}">Edit Automobile</a></li>

                              <!-- <li><a class="myAccount-attachment" title="Photos / Videos" href="https://www.helloaddress.com/nc/myaccount/media/P942062"> Manage photos/videos</a></li>

                              <li><a class="myAccount-edit" title="View Contacts" href="https://www.helloaddress.com/nc/property/contactViews/942062"> Contacts viewed</a></li>

                              <li><a class="myAccount-verify" href="javascript:void(0)" title="Verify" data-hafe-phone="942062"> Verify phone number</a></li> -->
                              <li><a class="myAccount-sold-out" title="Mark as Sold Out" href="javascript:void(0);" data-action-type="Sold Out" data-ha-manage-property="sold-out" data-href="http://127.0.0.1:8000/panel/property-sold-out2">Mark as Sold Out</a></li>                               
                              <li><a class="myAccount-delete" title="Delete" href="javascript:void(0);" data-ha-manage-property="remove" data-href="{{url('/panel/automobile-delete'.$automobile->id)}}"> Delete Automobile</a></li>
                          </ul>
                        </div>
                       </li>
                   </ul>
               </div>
            </div>
            @endforeach
    
</div>
          </div>
      </div>
       <div class="row tabcontent nexttab" id="event9">
        @php
         use App\Models\Property;
        @endphp
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="table-responsive clearfix">
    <table class="table ">
      <thead class="font-nunito semi-bold text-uppercase">
        <tr>
          <th width="18%">Property ID</th>
          <th width="59%">Title</th>
          <th width="23%">Remove</th>
        </tr>
      </thead>
    
    </table>
    <div class="pagination-wrap whitePage">
      <nav></nav>
    </div>
  </div>
</div>
</div> 
       <div class="row tabcontent nexttab mt-4" id="event11">
        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12"> 
                                <h2 class="font-nunito semi-bold">Parking Slots
                                    <!-- <span>Last Login : September 22, 2023, 4:49 pm</span> -->
                                                                    </h2>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12 mb-2">
                              
                            <a href="{{url('panel/add-slots')}}" class="btn btn-warning font-roboto regular add-prop">
                                    <span></span><span class="" style="font-size:14px;">+Add New</span>
                                </a>
                            </div>
                          
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
<div class="row">
   
</div>
</div>
</div>  
       <div class="row tabcontent nexttab mt-4" id="event12">
        <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12"> 
                                <h2 class="font-nunito semi-bold">Ads</h2>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12 mb-2 ">
                                <a href="{{url('add_ad')}}" class="btn btn-warning font-roboto regular " type="button" >
                                    <span></span><span class="" style="font-size:14px;">+Add new add</span>
                                </a>
                            </div>
                             <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 mb-2">
                            <!--<a href="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">-->
                            <!--        <span></span><span class="" style="font-size:14px;">Add New Ads</span>-->
                            <!--    </a>-->                                              

<!--                            <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">-->
<!--  Add New Ads-->
<!--</a>-->


<div class="modal" id="adminproductsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background-color:#d3111a;">
        <h5 class="modal-title text-center" id="exampleModalLabel">New Ad</h5>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{url('panel/addtheads')}}" enctype="multipart/form-data" id="addAdForm">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Page</label>
            <select name="page" class="form-control" id="productstore" required="">
              <option selected disabled>Select An Option</option>
              <option value="Home">Home Page</option>
              <option value="Properties List">Properties List Page</option>
              <option value="Automobile List">Automobile List Page</option>
              <option value="Property View">Property View Page</option>
              <option value="Automobile View">Automobile View Page</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Section</label>
            <select name="position" class="form-control" id="productstore" required="">
              <option selected disabled>Select An Option</option>
              <option value="top">Top</option>
              <option value="bottom">Bottom</option>
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Url</label>
            <input type="text" class="form-control" name="url">
          </div>
          <div class="form-group">
            <label for="fileInput" class="col-form-label">Image</label>
            <input type="file" class="form-control" id="fileInput" name="image" accept="image/*" onchange="validateFileSize()" required/>
            <small id="imageSizeError" class="text-danger" style="display:none;">Image size should be less than 2MB.</small>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn text-light" style="background-color:#d3111a;" id="submitButton">Add Ad</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--off canvas end-->
                            </div>
        <!--@if ($message = Session::get('success'))  -->
        <!--<div class="alert alert-success alert-block">  -->
        <!--    <button type="button" class="close" data-dismiss="alert"></button>   -->
        <!--        <strong>{{ $message }}</strong>  -->
        <!--</div>  -->
        <!--@endif -->
        <!--  @if ($message = Session::get('error'))  -->
        <!--<div class="alert alert-success alert-block">  -->
        <!--    <button type="button" class="close" data-dismiss="alert"></button>   -->
        <!--        <strong>{{ $message }}</strong>  -->
        <!--</div>  -->
        <!--@endif-->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
<div class="row">
    @foreach($ads as $ad)
    <!--j2-->
    @if($ad->status==1)
                         @php
                         $status="active";
                         @endphp
                 @else
                     @php
                     $status="inactive";
                     @endphp
                 @endif
                
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 brtop-30 mt-4"  style="">
                <div class="myaccount-listing clearfix border-radius-3 {{$status}}">
                   <span class="badge status font-roboto regular border-radius-3"></span>
                                                        <div class="col-lg-5 col-md-12 col-sm-5 col-xs-5 img-wrap hover-click" style="background: url('{{asset('uploads/ads/'.$ad->image)}}') no-repeat center; background-size: cover">
                    
                                         <a href="http://127.0.0.1:8000/panel/edit-automobiles1"></a>
                   </div>
                   <div class="col-lg-7 col-md-12 col-sm-7 col-xs-7">
                       <h2 class="font-roboto ">Price : {{$ad->price}}</h2>
                       <h2 class="font-roboto ">Duration :{{$ad->Duration}}</h2>
                       <h2 class="font-roboto ">Purchased date :{{$ad->created_at}}</h2>
                       <h2 class="font-roboto ">Redirect Url :{{$ad->url}}</p>
              
                   </div>
               </div>
               <div class="myaccount-listing-link clearfix">
                   <ul class="font-roboto regular">
                       <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                          <a href="https://www.helloaddress.com/nc/property/package/942062"></a>
                          <a href="{{url('pay_ad'.$ad->id)}}"><span class="subscribe-ico"></span>Subscribe</a>
<!--k1-->
                          
                       </li>
                       <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                           <div class="dropdown">
                               <a href="#" class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="more-ico"></span> More Actions
                          </a>
                          <ul class="dropdown-menu font-roboto regular" aria-labelledby="dropdownMenu1">
                           <li> <button id="openModalBtn">Edit</button></li>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
          <h5 class="modal-title" id="exampleModalLabel">Edit Ad</h5>
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
        <!--  <span aria-hidden="true">&times;</span>-->
        <!--</button>-->
      <div class="modal-body">
        <form action="{{url('panel/editAds/'.$ad->id)}}" method="post" enctype="multipart/form-data" >
            @csrf
            <input type="hidden" id="appendtheid" name="id" value="{{$ad->id}}">
     
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Page</label>
            <select  name="page" class="form-control" id="appendpage"  required="">
             <option selected disabled>Select An Option</option>   
             <option value="Home">Home Page</option>
             <option value="Properties List">Properties List Page</option>
             <option value="Automobile List">Automobile List Page</option>
             <option value="Property View">Property View Page</option>
             <option value="Automobile View">Automobile View Page</option>
             <option value="Services">Services Page</option>
             <option value="About">About Us Page</option>
             <option value="Contact">Conatact us Page</option>            
            </select>          
          </div>
       
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Section</label>            
            <select  name="display_section" class="form-control" id="appendsection"  required="">
             <option selected disabled>Select An Option</option>                   
             <option value="Top">Top</option>
             <option value="Middle">Middle</option>
             <option value="Bottom">Bottom</option>
            </select>             
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Url</label>            
            <input type="text" class="form-control" id="appendurl" name="url">            
          </div>          
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image</label>
            <input type="file"  class="form-control" id="ad_image" name="image"/>
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Price</label>
            <input type="text"  class="form-control" id="price" name="price" value="{{$ad->price}}" readonly/>
          </div>
         <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
        </form>
      </div>
     
  </div>
</div>
                            <!--<li>-->
                            <!--     <a href="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Edit Ad </a>-->
                            <!--</li>-->
                           
                         <div >
<!--<div class="modal" id="adminproductseditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog" role="document">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--        <h5 class="modal-title" id="exampleModalLabel">Edit Ad</h5>-->
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--          <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--      </div>-->
<!--      <div class="modal-body">-->
<!--        <form action="{{url('admin/editads')}}" method="post" enctype="multipart/form-data" >-->
<!--            @csrf-->
<!--            <input type="hidden" id="appendtheid" name="id">-->
<!--          <div class="form-group">-->
<!--            <label for="recipient-name" class="col-form-label">Page</label>-->
<!--            <select  name="page" class="form-control" id="appendpage"  required="">-->
<!--             <option selected disabled>Select An Option</option>   -->
<!--             <option value="Home">Home Page</option>-->
<!--             <option value="Properties List">Properties List Page</option>-->
<!--             <option value="Automobile List">Automobile List Page</option>-->
<!--             <option value="Property View">Property View Page</option>-->
<!--             <option value="Automobile View">Automobile View Page</option>-->
<!--             <option value="Services">Services Page</option>-->
<!--             <option value="About">About Us Page</option>-->
<!--             <option value="Contact">Conatact us Page</option>            -->
<!--            </select>          -->
<!--          </div>-->
<!--          <div class="form-group">-->
<!--            <label for="recipient-name" class="col-form-label">Section</label>            -->
<!--            <select  name="display_section" class="form-control" id="appendsection"  required="">-->
<!--             <option selected disabled>Select An Option</option>                   -->
<!--             <option value="Top">Top</option>-->
<!--             <option value="Middle">Middle</option>-->
<!--             <option value="Bottom">Bottom</option>-->
<!--            </select>             -->
<!--          </div>-->
<!--          <div class="form-group">-->
<!--            <label for="recipient-name" class="col-form-label">Url</label>            -->
<!--            <input type="text" class="form-control" id="appendurl" name="url">            -->
<!--          </div>          -->
<!--           <div class="form-group">-->
<!--            <label for="recipient-name" class="col-form-label">Image</label>-->
<!--            <input type="file"  class="form-control" id="ad_image" name="image"/>-->
<!--          </div>-->
<!--         <div class="modal-footer">-->
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--        <button type="submit" class="btn btn-primary">Update</button>-->
<!--      </div>-->
<!--        </form>-->
<!--      </div>-->
     
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
  <!--<div class="modal-dialog" role="document">-->
  <!--  <div class="modal-content">-->
  
    <!--<form method="POST" action="{{url('panel/addtheads')}}" class="modal " id="editAd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" enctype="multipart/form-data">-->
    <!--        @csrf      -->
    <!--  <div class="modal-body  bg-info">-->

    <!--        <label>Image</label>-->
    <!--        <input type="file" class="form-control" id="fileInput" name="image" accept="image/*" onchange="validateFileSize()" required>-->
    <!--        <p id="fileSizeError" style="color: red;"></p>-->
            <!--<label>Url</label>-->
            <!--<input type="text" class="form-control" name="url">-->
            <!--<lable for="position">Choose Position</lable>-->
            <!--<select name="position">-->
            <!--    <option value="top">Top</option>-->
            <!--    <option value="bottom">Bottom</option>-->
            <!--</select>-->
    <!--        <lable for="page">Where To Display The Ad</lable>-->
    <!--        <select name="page">-->
    <!--            <option value="home">Home Page</option>-->
    <!--            <option value="all-properties">All Properties Page</option>-->
    <!--            <option value="automobiles">Automobiles page</option>-->
    <!--        </select>-->

        
    <!--  </div>-->
    <!--  <div class="modal-footer  bg-info">-->
    <!--    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
    <!--    <button type="submit" class="btn btn-primary" href="">ADD NEW AD</button>-->
    <!--  </div>-->
    <!-- </form>-->
     
  <!--  </div>-->
  <!--</div>-->
</div>       
                             
                                                             
                              <!--<li><a class="myAccount-delete" title="Delete" href="javascript:void(0);" data-ha-manage-property="remove" data-href="{{url('panel/delete-ad/'.$ad->id)}}"> Delete Ad</a></li>-->
                            <li> 
                            <form id="deleteForm" action="{{ route('delete.ad', ['id' => $ad->id]) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="myAccount-delete border border-0 py-3 bg-white text-start bg-warning-hover"  style="width: 100%">Delete Ad</button>
                            </form>
                            </li>

                          </ul>
                        </div>
                       </li>
                   </ul>
               </div>
            </div>
            @endforeach
</div>
</div>
</div>                  
  <div class="row tabcontent nexttab mt-4" id="event2">
                            <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12"> 
                                <h2 class="font-nunito semi-bold"> Properties
                                    <!-- <span>Last Login : September 22, 2023, 4:49 pm</span> -->
                                </h2>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12 mb-2">
                                <a href="{{url('basic')}}" class="btn btn-warning font-roboto regular add-prop">
                                    <span></span><span class="" style="font-size:14px;">+Add Property</span>
                                </a><br><br>
                                 &nbsp;<a href="{{url('needed')}}" class="btn btn-warning font-roboto regular add-prop">
                                    <span></span><span class="" style="font-size:14px;">+Add Needed  </span>
                                </a>
                            </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">                  
      <div class="row brbottom-30">
         @foreach($myproperties as $property)
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 brtop-30">
                 
                 @if($property->status==1)
                         @php
                         $status="active";
                         @endphp
                 @else
                     @php
                     $status="inactive";
                     @endphp
                 @endif
                
                        
                <div class="myaccount-listing clearfix border-radius-3 {{$status}}">
                   <span class="badge status font-roboto regular border-radius-3"></span>
                   @if(isset($property->main_image))
                   
                    <div class="col-lg-5 col-md-12 col-sm-5 col-xs-5 img-wrap" 
                    style="background: url('{{asset('uploads/properties/'.$property->main_image)}}')
                     no-repeat center; background-size: cover">
                    @else
                     
                     <div class="col-lg-5 col-md-12 col-sm-5 col-xs-5 img-wrap"  style="background: url('https://assets.helloaddress.com/ui/build/images/property-no-image-small-rh.jpg') no-repeat center; background-size: cover">
                    @endif
                     <a href="{{url('property'.$property->id)}}"></a>
                   </div>
                   <div class="col-lg-7 col-md-12 col-sm-7 col-xs-7">
                    {{--logo on payment added  j1--}}
                    <section class="row">
                      
                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                       <h2 class="font-roboto  text-danger">
                        <a href="{{url('property'.$property->id)}}">
                            <?php 
                            if($property->main_cat==1)
                            {
                              $main_cat_label=" -  Rent";
                            }
                            if($property->main_cat==2)
                            {
                              $main_cat_label=" - Sharing ";
                            }
                            if($property->main_cat==3)
                            {
                              $main_cat_label=" -  Rent";
                            }
                            if($property->main_cat==4||$property->main_cat==7)
                            {
                                if($property->for_let_sale=="1"||$property->for_let_sale=="4")
                                {
                                  $main_cat_label=" Parking - Rent";
                                }
                                if($property->for_let_sale=="5"||$property->for_let_sale=="2")
                                {
                                  $main_cat_label=" Parking - Sale";
                                }
                                if($property->for_let_sale=="3")
                                {
                                  $main_cat_label=" Parking - Rent/Sale";
                                }
                            }
                            if($property->main_cat==5)
                            {
                              $main_cat_label=" -  Sale";
                            }
                            if($property->main_cat==6)
                            {
                              $main_cat_label=" -  Sale";
                            }
                            if($property->main_cat==8)
                            {
                              $main_cat_label=" -  Holiday Homes";
                            }
                            if($property->main_cat==9)
                            {
                              $main_cat_label=" -  Needed";
                            }
                            if($property->main_cat==10)
                            {
                              $main_cat_label=" -Sharing  Needed";
                            }
                            if($property->main_cat==11)
                            {
                              $main_cat_label=" -  Needed";
                            }
                            if($property->main_cat==12)
                            {
                              $main_cat_label=" Parking -  Needed";
                            }
                            ?>
                          
                         <p style="color:red"> {{$property->property_type}}</p></a>
                       </h2>
                      </div>
                       @if($property->status==3)
                       <a href="{{url('propertysubscribe/'.$property->id)}}">
                     <button type="button" class="btn btn-danger btn-sm text-white subscripe"><b><i class="fa fa-ban" aria-hidden="true"></i>&nbsp;SoldOut<b></button> 
                  </a>
                       @elseif(Auth::user()->role!="agent")
                        @endif
                       <?php if($property->payment_status==0){?>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      
                    <a href="{{url('pay_now'.$property->id)}}">
                     <button type="button" class="btn btn-info btn-sm text-white subscripe mt-4"><b>Pay Now <b></button> 
                  </a>
                    </div>
                    <?php } ?>
                   
                    <?php
                    if($property->payment_status==1){?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      
                    <a href="{{asset('uploads/PDF/'.$property->invoice)}}" target="_blank">
                     <button type="button" class="btn btn-success btn-sm text-white subscripe mt-4"><b><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Down Load Invoice<b></button> 
                  </a>
                    </div>
                    
                    <?php } ?>
                    </section>
                       <p class="font-roboto regular locatio"><span>Location </span>{{$property->street}}<br> {{$property->city}} <br>{{$property->town}}
                       <br>{{$property->county}}<br>{{$property->eir_code}}</p>
                       
                       <p class="font-roboto regular text-warning">VIEWS : {{$property->view_count}}</p>
                   </div>
               </div>
               <div class="myaccount-listing-link clearfix">
                   <ul class="font-roboto regular d-flex justify-content-between container ">
                      <li style="border-right:0;">
                                <a class="myAccount-edit" title="Edit" 
                                href="{{url('location')}}?id=2&edit_id={{$property->id}}" style="text-decoration:none;color:blue;">
                                  Edit property
                                </a>
                              </li>
                                               <li style="border-right:0;">
                                                   <form method="post" action="{{url('/panel/property-delete'.$property->id)}}">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button type="submit" class="myAccount-delete" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');" style="text-decoration:none;border:0;background-color:transparent;color:blue;" > Delete property</button>
                                                   </form>
                                
                                </li>                      
                                       <li>
                                                                <form method="get" action="{{url('/panel/property-sold-out'.$property->id)}}">
                                                                    @csrf
                                                                    <button  type="submit" style="border:0;background-color:transparent;color:blue;">{{$property->status=='soldout'?'Mark as Active':'Mark as Sold Out'}}{{$property->id}}</button>
                                                                </form>
                                                                
                                                              </li>
                       <!--<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">-->
                       <!--    <div class="dropdown">-->
                       <!--        <a href="#" class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">-->
                       <!--     <span class="more-ico"></span> More Actions-->
                       <!--   </a>-->
                          <!--<ul class="dropdown-menu font-roboto regular" aria-labelledby="dropdownMenu1">-->
                          <!--    <li>-->
                          <!--      <a class="myAccount-edit" title="Edit" href="{{url('panel/edit-properties/'.$property->id)}}">-->
                          <!--        Edit property-->
                          <!--      </a>-->
                          <!--    </li>-->

                               <!--<li><a class="myAccount-attachment" title="Photos / Videos" href="https://www.helloaddress.com/nc/myaccount/media/P942062"> Manage photos/videos</a></li>-->

                       <!--<li><a class="myAccount-edit" title="View Contacts" href="https://www.helloaddress.com/nc/property/contactViews/942062"> Contacts viewed</a></li>-->

                       <!--<li><a class="myAccount-verify" href="javascript:void(0)" title="Verify" data-hafe-phone="942062"> Verify phone number</a></li> -->
                       
                                
                              <!--<li><a class="myAccount-delete" title="Delete" href="javascript:void(0);" data-ha-manage-property="remove" data-href="{{url('/panel/property-delete'.$property->id)}}"> Delete property</a></li>-->
                       <!--   </ul>-->
                       <!-- </div>-->
                       <!--</li>-->
                   </ul>
               </div>
            </div>
 @endforeach
          
             </div>
              </div>
          </div>
      </div>
  
      </div>      
           </div>
        </div>
    </div>
</section>


<!-- Modal -->

<!--<div  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--  <div class=" modal-dialog-centered modal-dialog-scrollable " role="document" >-->
<!--    <div class="modal-content" >-->
  
<!--    <form method="POST" action="{{url('panel/addtheads')}}" class="modal " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" enctype="multipart/form-data" style="justify-content:center;margin:auto;align-items:center;">-->
<!--            @csrf      -->
<!--      <div class="modal-body  container"style="background-color:#d3111a;" >-->
<!--<div class="container-fluid">-->
<!--            <label>Image</label>-->
<!--            <input type="file" class="form-control" id="fileInput" name="image" accept="image/*" onchange="validateFileSize()" required>-->
<!--            <p id="fileSizeError" style="color: red;"></p>-->
<!--            <label>Url</label>-->
<!--            <input type="text" class="form-control" name="url">-->
<!--            <lable for="position">Choose Position</lable>-->
<!--            <select name="position">-->
<!--                <option value="top">Top</option>-->
<!--                <option value="bottom">Bottom</option>-->
<!--            </select>-->
<!--            <lable for="page">Where To Display The Ad</lable>-->
<!--            <select name="page">-->
<!--                <option value="home">Home Page</option>-->
<!--                <option value="all-properties">All Properties Page</option>-->
<!--                <option value="automobiles">Automobiles page</option>-->
<!--            </select>-->

<!--        <div class="modal-footer  " style="background-color:#d3111a;">-->
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--        <button type="submit" class="btn btn-primary" href="">ADD NEW AD</button>-->
<!--      </div>-->
<!--      </div>-->
      
<!--     </form>-->
<!--     </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!-- Modal -->

<!--<div class="modal fade in" id="adadsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">-->
<!--    <div class="modal-dialog" style="padding-top: 10%;">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
<!--                <div class="modal-title font-nunito regular">Confirm removing property</div>-->
<!--            </div>-->
<!--            <div class="modal-body font-roboto regular"><p>This action will remove the property permanently. <br> Are you sure you want to continue ?</p>-->
<!--            <div class="clearfix brtop-20"></div>-->
<!--            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>-->
<!--            <button type="button" class="btn yellow-btn confirmOk">Ok</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

 <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous">
          
</script>
<script>// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var openBtn = document.getElementById("openModalBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
openBtn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<!--OLD script for the chat for sending msg-->

 <script type="text/javascript">

  function scrollToBottom() {
    const chatBox = document.querySelector('.msger-chat');
    chatBox.scrollTop = chatBox.scrollHeight;
  }

$('.msger-send-btn').click(function()
{
  var dt = new Date();
  var time = dt.getHours() + ":" + dt.getMinutes();  
  var textmsg=$('.msger-input').val();
  var text_to_user_id = $('#text_to_user_id').val();
   
  $('.msger-chat').append('  <li class="message outgoing">'+ textmsg +'</li> ');
 $('.msger-input').val("");
 scrollToBottom();
      $.ajax({
      url:"{{ url('addchat') }}",
      data:{user_id : text_to_user_id,message:textmsg,flag:1},
      success:function(data){
      $('.msger-input').empty();
      }
    });
});

$('.chat_side_items').click(function()
{
    var foreign_user_id=$(this).closest('.custom_list').find('.find_foreign_user').val();
    var findchat=$(this).closest('.custom_list').find('.findchat').val();
    var finduniqueid=$(this).closest('.custom_list').find('.find_unique_id').val();
     $('#text_to_user_id').val(foreign_user_id);
      $.ajax({
        url:"{{ url('chatcontents') }}",
        data:{foreign_user_id : foreign_user_id, findchat:findchat,finduniqueid:finduniqueid},
        success:function(data){
          $('.msger-chat').empty();
          $('.msger-chat').append(data);
          scrollToBottom();
        }
     });
});

 </script>






 <script>
  function validateFileSize() {
    var fileInput = document.getElementById('fileInput');
    var fileSize = fileInput.files[0].size; // in bytes
    var maxSize = 2 * 1024 * 1024; // 2MB

    if (fileSize > maxSize) {
      document.getElementById('imageSizeError').style.display = 'block';
      document.getElementById('submitButton').disabled = true;
    } else {
      document.getElementById('imageSizeError').style.display = 'none';
      document.getElementById('submitButton').disabled = false;
    }
  }
</script>
 @endsection               
           