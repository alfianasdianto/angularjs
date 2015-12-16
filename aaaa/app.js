new Vue({
    el: '#liren',
    data: {
        title: "Hello from VueJS",
        formOpened: false,
        links: [

            {
                url: "http://malescast.com",
                title: "Malescast",
                desc: "Tempat belajar developer males",
                vote: 29
            },
            {
                url: "http://facebook.com",
                title: "Facebook",
                desc: "Tempat posting status :)",
                vote: 10
            }

        ]
    },
    methods: {
        showForm : function() {
            this.formOpened = true;
        },
        hideForm : function() {
            this.formOpened = false;
            this.resetNewLink();
        },
        resetNewLink : function() {
            this.newLink = {
                title: '',
                url: '',
                desc: '',
                vote: 0
            }
        },
        addLink : function() {
            this.links.push({
                url: this.newLink.url,
                title: this.newLink.title,
                desc: this.newLink.desc,
                vote: 0
            });
            this.resetNewLink();
            this.hideForm();
        },
        removeLink : function(link) {
            this.links.$remove(link);
        },
        upVote : function(link) {
            link.vote++;
        },
        downVote : function(link) {
            link.vote--;
        }
    }
});