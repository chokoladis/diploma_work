import { $ } from "jquery";

$(function(){

    if ($(window).width() > 960)
    {
        $('body').parallax({
            'elements':[
                {
                    'selector':'.plus1',
                    'properties':{
                        'x':{
                            'left':{
                                'initial': 6,
                                'multiplier': 0.001,
                                'unit': '%',
                                'invert':false
                            }
                        },
                        'y':{
                            'top':{
                                'initial': 22,
                                'multiplier': 0.0003,
                                'unit': '%',
                                'invert':false
                            }
                        }
                    }
                },
                {   'selector':'.plus2',
                    'properties':{
                        'x':{
                            'right':{
                                'initial': 2,
                                'multiplier': 0.003,
                                'unit': '%',
                                'invert':false
                            }
                        },
                        'y':{
                            'top':{
                                'initial': 2,
                                'multiplier': 0.0001,
                                'unit': '%',
                                'invert':true
                            }
                        }
                    }
                },
                {    'selector':'.krug',
                    'properties':{
                        'x':{
                            'left':{
                                'initial': 5,
                                'multiplier': 0.001,
                                'unit': '%',
                                'invert':false
                            }
                        },
                        'y':{
                            'top':{
                                'initial': 3,
                                'multiplier':0.003,
                                'unit': '%',
                                'invert':true
                            }
                        }
                    }
                },
                {    'selector':'.line1',
                    'properties':{
                        'x':{
                            'left':{
                                'initial': 50,
                                'multiplier': 0.01,
                                'unit': '%',
                                'invert':false
                            }
                        },
                        'y':{
                            'top':{
                                'initial': 1,
                                'multiplier': 0.002,
                                'unit': '%',
                                'invert':false
                            }
                        }
                    }
                },
                {   'selector':'.line2',
                    'properties':{
                        'x':{
                            'left':{
                                'initial': 65,
                                'multiplier': 0.002,
                                'unit': '%',
                                'invert':false
                            }
                        },
                        'y':{
                            'top':{
                                'initial': 30,
                                'multiplier': 0.002,
                                'unit': '%',
                                'invert':false
                            }
                        }
                    }
                },
                {    'selector':'.offer_word',
                    'properties':{
                        'x':{
                            'left':{
                                'initial': -8,
                                'multiplier': 0.002,
                                'unit': 'vh',
                                'invert':false
                            }
                        }
                    }
                },
                {    'selector':'.dline1',
                    'properties':{
                        'x':{
                            'right':{
                                'initial': 16,
                                'multiplier': 0.002,
                                'unit': '%',
                                'invert':false
                            },
                        'y':{
                            'top':{
                                'initial': 7,
                                'multiplier': 0.03,
                                'unit': '%',
                                'invert':true
                            }
                        }
                            
                        }
                    }
                },
                {    'selector':'.tringles',
                    'properties':{
                        'x':{
                            'right':{
                                'initial': 5.5,
                                'multiplier': 0.002,
                                'unit': '%',
                                'invert':false
                            },
                        'y':{
                            'bottom':{
                                'initial': 12,
                                'multiplier': 0.02,
                                'unit': '%',
                                'invert':false
                            }
                        }
                            
                        }
                    }
                } 
                
            ]
        });
    };
});