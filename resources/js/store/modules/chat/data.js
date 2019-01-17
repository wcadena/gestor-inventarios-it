// char data
export const users = [
    {
        id: 7,
        avatar: "/static/avatars/user-15.jpg",
        name: 'Levi Meyer',
        status: 1,
        lastSeen: 'Today 1:30 pm',
        subtitle: "Pellentesque placerat ligula ut tortor aliquam consectetur",
        chats: [
            {
                id: 1,
                body: 'Nulla vel turpis volutpat, fermentum nisl at, feugiat erat. Curabitur nec nulla non metus scelerisque feugiat nec non justo',
                isAdmin: true,
                time:"Yesterday"
            },
            {
                id: 2,
                body: 'Nam a enim non ipsum euismod efficitur id quis eros.',
                isAdmin: false,
                time: "01:00 AM"
            },
            {
                id: 3,
                body: 'Etiam ac nulla a lacus pulvinar suscipit',
                isAdmin: true,
                time: "4 hours ago"
            },
            {
                id: 4,
                body: 'Cras non rhoncus ligula, vel interdum felis. Proin vitae tellus tortor',
                isAdmin: false,
                time: "5 hours ago"
            },
            {
                id: 4,
                body: 'Cras egestas consequat dolor quis iaculis. Vivamus congue lacinia',
                isAdmin: true,
                time: "2 hours ago"
            }
        ],
        selected: false
    },
    {
        id: 1,
        avatar: "/static/avatars/user-6.jpg",
        name: "Alissa Brooks",
        status: 0,
        lastSeen: 'yesterday',
        subtitle: "Class aptent taciti sociosqu ad litora torquent per",
        chats: [
            {
                id: 1,
                body: 'Fusce vehicula maximus tellus eget bibendum',
                isAdmin: true,
                time:"1 month ago"
            },
            {
                id: 2,
                body: 'Aliquam id augue at',
                isAdmin: false,
                time:"1 month ago"
            },
            {
                id: 3,
                body: 'Praesent pellentesque',
                isAdmin: true,
                time:"2 weeks ago"
            },
            {
                id: 4,
                body: 'Pellentesque consectetur elit non metus aliquet, non pharetra enim condimentum',
                isAdmin: false,
                time: "2 weeks ago"
            },
            {
                id: 5,
                body: 'Etiam vehicula tempor dui sagittis suscipit',
                isAdmin: true,
                time: "2 weeks ago"
            },
            {
                id: 6,
                body: 'Vivamus ornare mollis vestibulum. Duis placerat semper neque rutrum gravida. Phasellus volutpat imperdiet est',
                isAdmin: false,
                time: "2 weeks ago"
            },
            {
                id: 7,
                body: 'lectus diam',
                isAdmin: true,
                time: "2 weeks ago"
            },
            {
                id: 8,
                body: 'In quis nisi metus. Sed feugiat nisl eget lorem elementum',
                isAdmin: false,
                time: "1 week ago"
            },
            {
                id: 9,
                body: 'Aenean nulla mi, tincidunt in interdum eu, bibendum vel nisi. Integer egestas mi dui, ut rhoncus dolor',
                isAdmin: true,
                time: "1 week ago"
            },
            {
                id: 10,
                body: 'Donec ut viverra nibh. Proin nulla leo, consectetur sit amet',
                isAdmin: false,
                time: "1 week ago"
            },
            {
                id: 12,
                body: 'Aenean sollicitudin pulvinar augue',
                isAdmin: true,
                time: "yesterday"
            },
            {
                id: 13,
                body: 'sed vulputate purus elementum sit amet. Aenean faucibus sed tellus ac gravida. Vestibulum vel vestibulum odio',
                isAdmin: false,
                time: "yesterday"
            }
        ],
        selected: false
    },
    {
        id: 2,
        avatar: "/static/avatars/user-8.jpg",
        name: 'Shanice Watts',
        status: 0,
        lastSeen: '2 days ago',
        subtitle: "Integer turpis velit, pretium eu molestie id, pretium ut neque",
        chats: [
            {
                id: 1,
                body: 'Quisque vitae magna ut odio molestie tincidunt vitae ut ipsum. Duis mollis magna cursus orci facilisis tempus',
                isAdmin: true,
                time: "2 weeks ago"
            },
            {
                id: 2,
                body: 'Vivamus quis ligula lectus',
                isAdmin: false,
                time: "2 weeks ago"
            },
            {
                id: 3,
                body: 'Proin sit amet interdum arcu. Ut ac accumsan neque. Mauris vel arcu vulputate',
                isAdmin: true,
                time: "1 week ago"
            },
            {
                id: 4,
                body: 'Fusce posuere nisl sed mi convallis blandit',
                isAdmin: false,
                time: "2 days ago"
            },
            {
                id: 5,
                body: 'Pellentesque et ex a justo dapibus pulvinar id sit amet felis',
                isAdmin: true,
                time: "2 days ago"
            }
        ],
        selected: false
    },
    {
        id: 3,
        avatar: "/static/avatars/user-9.jpg",
        name: "Mario Schultz",
        status: 1,
        lastSeen: '2 days ago',
        subtitle: "Nam pellentesque",
        chats: [
            {
                id: 1,
                body: 'Vivamus laoreet nibh nibh,',
                isAdmin: false,
                time: "1 week ago"
            },
            {
                id: 2,
                body: 'Orci varius natoque penatibus et magnis dis parturient montes,',
                isAdmin: false,
                time: "1 week ago"
            },
            {
                id: 3,
                body: 'Morbi eget imperdiet ex. Duis rutrum placerat mi',
                isAdmin: true,
                time: "4 days ago"
            },
            {
                id: 4,
                body: 'Suspendisse rhoncus accumsan lectus, et laoreet magna bibendum sed.',
                isAdmin: false,
                time: "4 days ago"
            },
            {
                id: 5,
                body: 'Sed quis!!',
                isAdmin: true,
                time: "2 days ago"
            }
        ],
        selected: false
    },
    {
        id: 4,
        avatar: "/static/avatars/user-10.jpg",
        name: "Nathanael Walton",
        status: 1,
        lastSeen: 'yesterday',
        subtitle: "Nunc viverra ex at gravida egestas",
        chats: [
            {
                id: 1,
                body: 'nascetur ridiculus mus',
                isAdmin: true,
                time: "2 days ago"
            },
            {
                id: 2,
                body: 'Cras hendrerit arcu eget sapien mollis gravida vel in mi.',
                isAdmin: false,
                time: "2 days ago"
            },
            {
                id: 3,
                body: 'Maecenas at ultricies mauris, ullamcorper molestie massa',
                isAdmin: true,
                time: "1 day ago"
            },
            {
                id: 4,
                body: 'Proin vulputate lorem nec purus posuere vulputate',
                isAdmin: false,
                time: "yesterday"
            },
            {
                id: 5,
                body: 'Class aptent taciti sociosqu ad litora torquent per conubia nostra',
                isAdmin: true,
                time: "yesterday"
            }
        ],
        selected: false
    },
    {
        id: 5,
        avatar: "/static/avatars/user-11.jpg",
        name: "Julianne Weber",
        status: 1,
        lastSeen: 'Today 1:02 pm',
        subtitle: "Etiam consequat finibus era",
        chats: [
            {
                id: 1,
                body: 'Curabitur faucibus mauris in quam ultricies,',
                isAdmin: true,
                time: "2 hours ago"
            },
            {
                id: 2,
                body: 'Proin vulputate lorem nec purus posuere vulputate',
                isAdmin: false,
                time: "2 hours ago"
            },
            {
                id: 3,
                body: 'Praesent justo velit, egestas a nulla a, aliquet sagittis ligula. Maecenas sit amet risus libero. Etiam interdum nec eros sit amet ultrices',
                isAdmin: true,
                time: "11:30 AM"
            },
            {
                id: 4,
                body: 'Etiam quis dui a nisi efficitur aliquam',
                isAdmin: false,
                time: "12:10 PM"
            },
            {
                id: 5,
                body: 'Nunc viverra ex at gravida egestas. Nam placerat congue felis in vulputate',
                isAdmin: true,
                time: "01:00 PM"
            }
        ],
        selected: false
    },
    {
        id: 6,
        avatar: "/static/avatars/user-13.jpg",
        name: 'Ashton Hubbard',
        status: 0,
        lastSeen: 'Today 8:30 am',
        subtitle: "Nullam convallis feugiat condimentum",
        chats: [
            {
                id: 1,
                body: 'Vivamus placerat ante ipsum, sed semper felis',
                isAdmin: true,
                time: "3 hours ago"
            },
            {
                id: 2,
                body: 'Praesent justo velit, egestas a nulla a, aliquet sagittis',
                isAdmin: false,
                time: "2 hours ago"
            },
            {
                id: 3,
                body: 'Proin ac posuere tortor',
                isAdmin: true,
                time: "1 hour ago"
            },
            {
                id: 4,
                body: 'Fusce eu scelerisque nibh',
                isAdmin: false,
                time: "08:00 AM"
            },
            {
                id: 5,
                body: 'Maecenas semper ullamcorper eleifend',
                isAdmin: true,
                time: "08:30 AM"
            }
        ],
        selected: false
    }
]