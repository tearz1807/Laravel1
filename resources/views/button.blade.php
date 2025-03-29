<button 
        v-if="showScrollToTopBtn" 
        @click="scrollToTop" 
        class="scroll-to-top" 
        :class="{ show: showScrollToTopBtn }">
        <i class="bi bi-chevron-double-up"></i>
    </button>