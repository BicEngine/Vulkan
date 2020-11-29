
#include "./1.2/types.h"
#include "./1.2/functions.h"

#if VK_API_VERSION >= VK_MAKE_VERSION(1, 2)
    #define VK_VERSION_1_2 1

    #ifndef VK_NO_PROTOTYPES
        #include "./1.2/prototypes.h"
    #endif
#endif
