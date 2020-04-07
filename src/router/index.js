import Vue from 'vue'
import Router from 'vue-router'
import Getdata from '../components/views/Getdata'
import Postdata from '../components/views/Postdata'
import Navbar from '../components/views/Navbar/Navbar'
import Laracasts from '../components/views/Laracasts'
import Dropdown from '../components/Dropdown'
import List from '../components/views/List'
import Errortest from '../components/views/Errortest'

import EditData from '@/components/views/EditData'




Vue.use(Router)

export default new Router({
  routes: [
    
    {
      path: '/getdata',
      component: Getdata
    },
    {
    	path: '/postdata',
    	component: Postdata
    },
    {
      path: '/laracasts',
      component: Laracasts
    },
    {
      path: '/dropdown',
      component: Dropdown
    },
    {
      path: '/list',
      component: List
    },
    {
      path: '/error',
      component: Errortest
    },
    {
      path: '/edit/:id',
      component: EditData
    }

  ],
  mode: 'history'
})
