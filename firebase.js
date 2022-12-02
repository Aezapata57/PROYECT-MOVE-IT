// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyB6EXM0kniSBVxzjYiBt52S7v4i5oXCM7Q",
  authDomain: "move-it-b033d.firebaseapp.com",
  projectId: "move-it-b033d",
  storageBucket: "move-it-b033d.appspot.com",
  messagingSenderId: "839971511705",
  appId: "1:839971511705:web:528e465a57e005176d4708",
  measurementId: "G-XSKXKK19NF"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);