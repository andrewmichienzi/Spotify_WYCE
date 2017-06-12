

// import myDatepicker from 'vue-datepicker/vue-datepicker-1.vue'
Vue.config.devtools = true;

Vue.component('playlists', {
      template: '#playlists-template',
      props: ['lists'],

      created() {
            this.lists = JSON.parse(this.lists);
      }
});
      
new Vue({
    el: 'body',
    
    data: {
      message: 'hello world',
      tasks: [
            'Go to the store',
            'Go to the bank',
            'Go to the doctor'
      ]
    }
});

/*window.Event = new class {
    constructor() {
        this.vue = new Vue();
    }

    fire(event, data = null) {
        this.vue.$emit(event, data);
    }

    listen(event, callback) {
        this.vue.$on(event, callback);
    }
}

Vue.component('progress-view', {
    data() {
        return { : 0 };
    }
});*/

//Vue.component('modal', {
            //     /*beautify ignore:start */
            //     template: `
            // 		<div class="modal is-active">
            // 		  	<div class="modal-background"></div>
            // 	  		<div class="modal-card">
            // 	    		<header class="modal-card-head">
            // 			      <slot name="header">
            // 			      </slot>
            // 			      <button class="delete"></button>
            // 			    </header>
            // 			    <section class="modal-card-body">
            // 			      <slot></slot>
            // 			    </section>
            // 			    <footer class="modal-card-foot">
            // 			    	<slot name="footer">
            // 		                <a class="button is-success">Save changes</a>
            // 		                <a class="button">Cancel</a>
            //                 	</slot>
            // 			    </footer>
            // 	  		</div>
            // 		</div>
            // 	`
            //         /*beautify ignore:end */
            // });

            // Vue.component('coupon', {
            // 	template: `
            // 		<input placeholder="Enter Coupon Code" @blur="onCouponApplied" >

            // 	`,

            // 	methods: {
            // 		onCouponApplied() {
            // 			Event.fire('applied');
            // 		}
            // 	}
            // });

            // Vue.component('task', {
            // 	template: '<li><slot></slot></li>'
            // });

            // Vue.component('task-list',
            // {
            // 	template: `
            // 	<div>
            // 	<task v-for="task in tasks">{{ task.task }}</task>
            // 	</div>
            // 	`,
            // 	data() {
            // 		return {
            // 			tasks: [
            // 			{ task: 'Go to the store', completed: true },
            // 			{ task: 'Task 2', completed: true },
            // 			{ task: 'Task 3', completed: false },
            // 			{ task: 'Task 4', completed: false }

            // 			]
            // 		};
            // 	}
            // });

            // Vue.component('message', {
            // 	props: ['title', 'body'],
            // 	data() {
            // 		return {
            // 			isVisible: true
            // 		}
            // 	},
            // 	template: `
            // 	<article class="message" v-show="isVisible">
            // 	<div class="message-header">
            // 	{{ title }}
            // 	<button class="delete" @click="isVisible = false;"></button>
            // 	</div>
            // 	<div class="message-body">
            // 	{{ body }}
            // 	</div>
            // 	</article>
            // 	`
            // });

            // Vue.component('modal', {

            // 	template: `
            // 	<div class="modal is-active">
            // 	<div class="modal-background"></div>
            // 	<div class="modal-content">
            // 	<div class="box">
            // 	<slot></slot>
            // 	</div>
            // 	</div>
            // 	<button class="modal-close" @click="$emit('close')"></button>
            // 	</div>
            // 	`
            // });

            // Vue.component('tabs', {
            // 	template: `
            // 	<div class="root">
            // 	<div class="tabs">
            // 	<ul>
            // 		<li v-for="tab in tabs" :class="{ 'is-active': tab.isActive }"> 
            // 			<a :href="tab.href" @click="selectTab(tab)">{{ tab.name }} </a>
            // 		</li>
            // 	</ul>
            // 	</div>

            // 	<div class="tabs-details">
            // 		<slot></slot>
            // 	</div>
            // 	</div>
            // 	`,

            // 	created() {
            // 		this.tabs = this.$children;
            // 	},

            // 	methods: {
            // 		selectTab(selectedTab){
            // 			this.tabs.forEach(tab => {
            // 				tab.isActive = (tab.name == selectedTab.name);
            // 			});
            // 		}
            // 	},


            // 	data() {
            // 		return { tabs: [] };
            // 	},
            // });

            // Vue.component('tab', {
            // 	props: {
            // 		name: {required: true},
            // 		selected: {default: false}
            // 	},
            // 	template: `
            // 		<div v-show="isActive"><slot></slot></div>
            // 	`,

            // 	data() {
            // 		return {
            // 			isActive: false
            // 		}
            // 	},

            // 	compiled() {
            // 		this.isActive = this.selected; 
            // 	},

            // 	computed: {
            // 		href() {
            // 			return '#' + this.name.toLowerCase().replace(/ /g, '-');
            // 		}
            // 	}
            // });
